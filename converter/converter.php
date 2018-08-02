<?php

// Add our lists.
$lists = array(
	// Adguard Mobile Ads
	'adguard-mobile-ads' => 'https://raw.githubusercontent.com/AdguardTeam/AdguardFilters/master/MobileFilter/sections/adservers.txt',

	// Adguard Mobile Tracking + Spyware
	'adguard-mobile-spyware' => 'https://raw.githubusercontent.com/AdguardTeam/AdguardFilters/master/MobileFilter/sections/spyware.txt',

	// Adguard Apps
	'adguard-mobile-specific' => 'https://github.com/AdguardTeam/AdguardFilters/raw/master/MobileFilter/sections/specific_app.txt',

	// Adguard DNS
	'adguard-dns' => 'https://filters.adtidy.org/extension/chromium/filters/15.txt',

	// Adguard Spyware First Party
	'adguard-spyware-firstparty' => 'https://raw.githubusercontent.com/AdguardTeam/AdguardFilters/master/SpywareFilter/sections/tracking_servers_firstparty.txt',
	
	// Adguard Tracking
	'adguard-tracking-servers' => 'https://raw.githubusercontent.com/AdguardTeam/AdguardFilters/master/SpywareFilter/sections/tracking_servers.txt',
	
	// Adguard Simplified Domains
	'adguard-domains' => 'https://filters.adtidy.org/extension/chromium/filters/15.txt',
	
	// Adguard Social Filter
	'adguard-social-filter' => 'https://filters.adtidy.org/extension/chromium/filters/4.txt',
	
	// Adguard Social Trackers
	'adguard-social-trackers' => 'https://raw.githubusercontent.com/AdguardTeam/AdguardFilters/master/SocialFilter/sections/social_trackers.txt',
	
	// Adguard Social Popups
	'adguard-social-popups' => 'https://raw.githubusercontent.com/AdguardTeam/AdguardFilters/master/SocialFilter/sections/popups.txt',
	
	// Adguard Safari Filters
	'adguard-safari' => 'https://filters.adtidy.org/extension/chromium/filters/12.txt',
	
	// Adversity Anti Social
	'adversity-anti-social' => 'https://raw.githubusercontent.com/Hubird-au/Adversity/master/Antisocial.txt',
	
	// Adware Filters
	'adware-filters' => 'https://easylist-downloads.adblockplus.org/adwarefilters.txt',
	
	// All-In-One Adblocklist
	'all-in-one-adblocklist' => 'https://raw.githubusercontent.com/hl2guide/All-in-One-Customized-Adblock-List/master/deanoman-adblocklist.txt',
	
	// Better.fyi Trackers
	'better-fyi-trackers' => 'https://raw.githubusercontent.com/anarki999/Adblock-List-Archive/master/Better.fyiTrackersBlocklist.txt',
	
	// Blockzilla
	'blockzilla' => 'https://raw.githubusercontent.com/zpacman/Blockzilla/master/Blockzilla.txt',
  
	// EasyPrivacy
	'easyprivacy' => 'https://easylist.to/easylist/easyprivacy.txt',

	// Easylist
	'easylist' => 'https://easylist.to/easylist/easylist.txt',

	// Easylist Adserver
	'easylist-adserver' => 'https://raw.githubusercontent.com/easylist/easylist/master/easylist/easylist_adservers.txt',

	// EasyPrivacy Specific
	'easyprivacy-specific' => 'https://github.com/easylist/easylist/raw/master/easyprivacy/easyprivacy_specific.txt',

	// EasyPrivacy Tracking
	'easyprivacy-tracking-servers' => 'https://raw.githubusercontent.com/easylist/easylist/master/easyprivacy/easyprivacy_trackingservers.txt',

   // Easylist Adult
	'easylist-adult-adservers' => 'https://raw.githubusercontent.com/easylist/easylist/master/easylist_adult/adult_adservers.txt',

   // Easylist Adult 3rd Party
	'easylist-adult-thirdparty' => 'https://raw.githubusercontent.com/easylist/easylist/master/easylist_adult/adult_thirdparty.txt',
	
	// Easylist Adult Specific
	'easylist-adult-specific' => 'https://raw.githubusercontent.com/easylist/easylist/master/easylist_adult/adult_specific_block.txt',
	
	// FanBoy EnhancedStats
	'fanboy-enhanced-stats' => 'https://www.fanboy.co.nz/enhancedstats.txt',
	
	// Fanboy Fake News
	'fanboy-fake-news' => 'https://raw.githubusercontent.com/ryanbr/fanboy-adblock/master/fake-news.txt',
	
	// Fanboy Complete
	'fanboy-complete' => 'https://fanboy.co.nz/r/fanboy-complete.txt',
	
	// MoaAB
	//'moaab' => 'http://adblock.mahakala.is/',
  
	// Quidsup No Track
	'quidsup-no-track' => 'https://raw.githubusercontent.com/quidsup/notrack/master/trackers.txt',

	// CHEF-KOCH's Ad & Tracker
	'ck-ad-tracker' => 'https://raw.githubusercontent.com/CHEF-KOCH/CKs-FilterList/master/Ad%20%26%20Tracker/CK%27s-Ad%20%26%20Tracker-FilterList.txt',
	
	// CHEF-KOCH's Malware
	'ck-malware' => 'https://raw.githubusercontent.com/CHEF-KOCH/CKs-FilterList/master/Malware/CK%27s-Malware-FilterList.txt',
	
	// CHEF-KOCH's Android Filter List
	'ck-android' => 'https://raw.githubusercontent.com/CHEF-KOCH/CKs-FilterList/master/Android/CK%27s-Android-FilterList.txt',
	
	// CHEF-KOCH's Skype Ad Free
	'ck-skype' => 'https://raw.githubusercontent.com/CHEF-KOCH/CKs-FilterList/master/Corporations/Skype%20Ad-Free/CK%27s-Skype-FilterList.txt',
	
	// CHEF-KOCH's Spotify Ad Free
	'ck-spotify' => 'https://raw.githubusercontent.com/CHEF-KOCH/CKs-FilterList/master/Corporations/Spotify%20Ad-Free/CK%27s-Spotify-FilterList.txt',
	
	// Spam404
	'spam404-ad' => 'https://raw.githubusercontent.com/Dawsey21/Lists/master/adblock-list.txt',

	// SquidBlacklist Ads
	'squidblacklist-ads' => 'http://www.squidblacklist.org/downloads/dg-ads.acl',
	
	// SquidBlacklist Malicious 
	'squidblacklist-malicious' => 'https://www.squidblacklist.org/downloads/dg-malicious.acl',
	
	// Porn Top 1M
	'porn-top1m' => 'https://raw.githubusercontent.com/chadmayfield/pihole-blocklists/master/lists/pi_blocklist_porn_top1m.list',
  
	// Cybercrime Tracker
	'cybercrime' => 'https://v.firebog.net/hosts/Cybercrime.txt',
	
	// Phishing Bad Sites
	'phishing-bad-sites' => 'http://phishing.mailscanner.info/phishing.bad.sites.conf',
	
	// Wow Dude PornList
	'wowdude-pornlist' => 'https://raw.githubusercontent.com/WowDude/PornList/master/PornList.txt',
	
	// EasyPrivacy Third-Party
	'easyprivacy-thirdparty' => 'https://raw.githubusercontent.com/easylist/easylist/master/easyprivacy/easyprivacy_thirdparty.txt'
);

foreach ( $lists as $name => $list ) {
	echo "Converting {$name}...\n";

	// Fetch filter list and explode into an array.
	$lines = file_get_contents( $list );
	$lines = explode( "\n", $lines );

	// HOSTS header.
	$hosts  = "# {$name} Custom Build\n";
	$hosts .= "# Builds Maintainer: Nayem Ador - nayemador.com\n";
	$hosts .= "# Converted From - {$list}\n";
	$hosts .= "# Last Converted - " . date( 'r' ) . "\n";
	$hosts .= "# Energized - ad.porn.malware blocking.\n";
	$hosts .= "# License: MIT\n\n";

	// Loop through each ad filter.
	foreach ( $lines as $filter ) {
		// Skip filter if matches the following:
		if ( false === strpos( $filter, '.' ) ) {
			continue;
		}
		if ( false !== strpos( $filter, '*' ) ) {
			continue;
		}
		if ( false !== strpos( $filter, '/' ) ) {
			continue;
		}
    if ( false !== strpos( $filter, '.js' ) ) { 
      continue;
    }
    if ( false !== strpos( $filter, '?' ) ) {
      continue;
    }
		if ( false !== strpos( $filter, '=' ) ) {
			continue;
    }
		if ( false !== strpos( $filter, ';' ) ) {
			continue;
    }
		if ( false !== strpos( $filter, '_' ) ) {
			continue;
		}
		if ( false !== strpos( $filter, '#' ) ) {
			continue;
		}
		if ( false !== strpos( $filter, ' ' ) ) {
			continue;
		}

		// Skip exception rules.
		if ( false !== strpos( $filter, '@@' ) ) {
			continue;
		}

		// Replace filter syntax with HOSTS syntax.
		// @todo Perhaps skip $third-party, $image and $popup?
		$filter = str_replace( array( '||', '^', '$websocket', ',websocket', ',other', '$other', '$subdocument', ',subdocument', '$important', ',important', '$object-subrequest', ',object-subrequest', '$third-party', 'third-party', ',third-party', '$image', ',image', ',script', '$script', ',object', '$object', '$popup', ',popup', '$empty', ',empty' ), '', $filter );

		// Skip rules matching 'xmlhttprequest' for now.
		if ( false !== strpos( $filter, 'xmlhttprequest' ) ) {
			continue;
		}

		// Skip exclusion rules.
		if ( false !== strpos( $filter, '~' ) ) {
			continue;
		}

		// If starting or ending with '.', skip.
		if ( '.' === substr( $filter, 0, 1 ) || '.' === substr( $filter, -1 ) ) {
			continue;
		}

		$hosts .= "0.0.0.0 {$filter}\n";
	}

	// Output the file.
	file_put_contents( "filter/{$name}.txt", $hosts );

	echo "{$name} converted to HOSTS file - see {$name}.txt\n";
}
