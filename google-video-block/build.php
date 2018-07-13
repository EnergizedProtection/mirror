<?php

// Add our lists.
$lists = array(
	// Google Video Blocker
	'Energized-GoogleVideo-Block' => 'https://raw.githubusercontent.com/AdroitAdorKhan/Energized/master/EnergizedHosts/EnergizedGV'

);

foreach ( $lists as $name => $list ) {
	echo "Converting {$name}...\n";

	// Fetch filter list and explode into an array.
	$lines = file_get_contents( $list );
	$lines = explode( "\n", $lines );

	// HOSTS header.
	$hosts  = "# Energized GoogleVideo Blocker\n";
	$hosts .= "# Builds Maintainer: Nayem Ador\n";
	$hosts .= "# Converted From - {$list}\n";
	$hosts .= "# Last Converted - " . date( 'r' ) . "\n";
	$hosts .= "# Energized - ad.porn.malware blocking.\n\n";

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
		if ( false !== strpos( $filter, '=' ) ) {
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
		$filter = str_replace( array( '||', '^', '$third-party', ',third-party', '$image', ',image', ',script', ',object', '$popup', '$empty' ), '', $filter );

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

		$hosts .= "0.0.0.0 r1---sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r1.sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r2---sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r2.sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r3---sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r3.sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r4---sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r4.sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r5---sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r5.sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r6---sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r6.sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r7---sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r7.sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r8---sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r8.sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r9---sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r9.sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r10---sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r10.sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r11---sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r11.sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r12---sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r12.sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r13---sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r13.sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r14---sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r14.sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r15---sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r15.sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r16---sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r16.sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r17---sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r17.sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r18---sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r18.sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r19---sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r19.sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r20---sn-{$filter}ooglevideo.com\n";
		$hosts .= "0.0.0.0 r20.sn-{$filter}ooglevideo.com\n";
	}

	// Output the file.
	file_put_contents( "format/{$name}.txt", $hosts );

	echo "{$name} converted to HOSTS file - see {$name}.txt\n";
}