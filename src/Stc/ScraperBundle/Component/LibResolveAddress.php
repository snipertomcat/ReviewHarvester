<?php

########################################################################
#
# LIB_resolve_addresses
#
# This library provides routines that create fully resolved
# web addresses
#
#-----------------------------------------------------------------------
# FUNCTIONS
#
#       resolve_address()
#		    This function returns fully resolved URLs for the $link
#		    which could be an images, css, javascript file, etc.
#
#       get_base_page_address()
#		    Search from right to left for first occurrence of "/".
#		    Then use everything from the left of that character as the
#           page base address.
#
#       get_base_domain_address()
#           Note that the base DOMAIN address is different than the base
#           PAGE address. The base page address may indicate a directory
#           structure, while the base domain address is simply the
#           domain, without any files or directories.
#
#-----------------------------------------------------------------------

namespace Stc\ScraperBundle\Component;

class LibResolveAddress
{
    public function __construct()
    {

    }

        /***********************************************************************
        resolve_address($link, $page_base)
        -------------------------------------------------------------
        DESCRIPTION:
        This function returns fully resolved URLs for the $link
        which could be an images, css, javascript file, etc.
        RETURNS:
        A fully resolved URL for the $link
         ***********************************************************************/
    function resolve_address($link, $page_base)
    {
        #----------------------------------------------------------
        # CONDITION INCOMING LINK ADDRESS
        #
        $link = trim($link);
        $page_base = trim($page_base);

        # if there isn't one, put a "/" at the end of the $page_base
        $page_base = trim($page_base);
        if( (strrpos($page_base, "/")+1) != strlen($page_base) )
            $page_base = $page_base."/";

        # remove unwanted characters from $link
        $link = str_replace(";", "", $link);			// remove ; characters
        $link = str_replace("\"", "", $link);			// remove " characters
        $link = str_replace("'", "", $link);			// remove ' characters
        $abs_address = $page_base.$link;

        $abs_address = str_replace("/./", "/", $abs_address);

        $abs_done = 0;

        #----------------------------------------------------------
        # LOOK FOR REFERENCES TO THE BASE DOMAIN ADDRESS
        #----------------------------------------------------------
        # There are essentially four types of addresses to resolve:
        # 1. References to the base domain address
        # 2. References to higher directories
        # 3. References to the base directory
        # 4. Addresses that are alreday fully resolved
        #
        if($abs_done==0)
        {
            # Use domain base address if $link starts with "/"
            if (substr($link, 0, 1) == "/")
            {
                // find the left_most "."
                $pos_left_most_dot = strrpos($page_base, ".");

                # Find the left-most "/" in $page_base after the dot
                for($xx=$pos_left_most_dot; $xx<strlen($page_base); $xx++)
                {
                    if( substr($page_base, $xx, 1)=="/")
                        break;
                }

                $domain_base_address = get_base_domain_address($page_base);

                $abs_address = $domain_base_address.$link;
                $abs_done=1;
            }
        }

        #----------------------------------------------------------
        # LOOK FOR REFERENCES TO HIGHER DIRECTORIES
        #
        if($abs_done==0)
        {
            if (substr($link, 0, 3) == "../")
            {
                $page_base=trim($page_base);
                $right_most_slash = strrpos($page_base, "/");

                // remove slash if at end of $page base
                if($right_most_slash==strlen($page_base)-1)
                {
                    $page_base = substr($page_base, 0, strlen($page_base)-1);
                    $right_most_slash = strrpos($page_base, "/");
                }

                if ($right_most_slash<8)
                    $unadjusted_base_address = $page_base;

                $not_done=TRUE;
                while($not_done)
                {
                    // bring page base back one level
                    list($page_base, $link) = move_address_back_one_level($page_base, $link);
                    if(substr($link, 0, 3)!="../")
                        $not_done=FALSE;
                }
                if(isset($unadjusted_base_address))
                    $abs_address = $unadjusted_base_address."/".$link;
                else
                    $abs_address = $page_base."/".$link;
                $abs_done=1;
            }
        }

        #----------------------------------------------------------
        # LOOK FOR REFERENCES TO BASE DIRECTORY
        #
        if($abs_done==0)
        {
            if (substr($link, 0, "1") == "/")
            {
                $link = substr($link, 1, strlen($link)-1);	// remove leading "/"
                $abs_address = $page_base.$link;			// combine object with base address
                $abs_done=1;
            }
        }

        #----------------------------------------------------------
        # LOOK FOR REFERENCES THAT ARE ALREADY ABSOLUTE
        #
        if($abs_done==0)
        {
            if (substr($link, 0, 4) == "http")
            {
                $abs_address = $link;
                $abs_done=1;
            }
        }

        #----------------------------------------------------------
        # ADD PROTOCOL IDENTIFIER IF NEEDED
        #
        if( (substr($abs_address, 0, 7)!="http://") && (substr($abs_address, 0, 8)!="https://") )
            $abs_address = "http://".$abs_address;

        return $abs_address;
    }

    /***********************************************************************
    get_base_page_address($url)
    -------------------------------------------------------------
    DESCRIPTION:
    Search from right to left for first occurrence of "/".
    Then use everything from the left of that character as the page
    base address.

    If the position of "/" is less than 7, then that character is
    part of an URL that is directly referenced.
    (i.e. "http://www.someplace.com".
    With direct URL references, always make sure that the base page
    address always ends in a "\".
    INPUTS:
    $url
    RETURNS:
    The base page address for $url
     ***********************************************************************/
    function get_base_page_address($url)
    {
        $slash_position = strrpos($url, "/");

        if ($slash_position>8)
            $page_base = substr($url, 0, $slash_position+1);  	// "$slash_position+1" to include the "/".
        else
        {
            $page_base = $url;  	// $url is already the page base, without modification.
            if($slash_position!=strlen($url))
                $page_base=$page_base."/";
        }


        # If the page base ends with a \\, replace with a \
        $last_two_characters = substr($page_base, strlen($page_base)-2, 2);
        if($last_two_characters=="//")
            $page_base = substr($page_base, 0, strlen($page_base)-1);

        return $page_base;
    }

    /***********************************************************************
    get_base_domain_address($page_base)
    -------------------------------------------------------------
    DESCRIPTION:
    Note that the base DOMAIN address is different than the base
    PAGE address. The base page address may indicate a directory
    structure, while the base domain address is simply the domain,
    without any files or directories.

    The base domain address found by taking everything to the right
    of the first "/" once past the initial "/"'s found after the
    protocol specifier (http:// or https://)
    INPUTS:
    $page_base, (from get_base_page_address)
    RETURNS:
    The base page domain address for URL
     ***********************************************************************/
    function get_base_domain_address($page_base)
    {
        for ($pointer=8; $pointer<strlen($page_base); $pointer++)
        {
            if (substr($page_base, $pointer, 1)=="/")
            {
                $domain_base=substr($page_base, 0, $pointer);
                break;
            }
        }

        $last_two_characters = substr($page_base, strlen($page_base)-2, 2);
        if($last_two_characters=="//")
            $page_base = substr($page_base, 0, strlen($page_base)-1);

        return $domain_base;
    }


    /***********************************************************************
    move_address_back_one_level($page_base, $object_source)
    -------------------------------------------------------------
    DESCRIPTION:
    This function is used by the library and not intended for
    external use.
    -------------------------------------------------------------
     */
    function move_address_back_one_level($page_base, $object_source)
    {
        // bring page base back one leve
        $right_most_slash = strrpos($page_base, "/");
        $new_page_base = substr($page_base, 0, $right_most_slash);

        // remove "../" from front of object_source
        $object_source = substr($object_source, 3, strlen($object_source)-3);

        $return_array[0]=$new_page_base;
        $return_array[1]=$object_source;
        return $return_array;
    }
}