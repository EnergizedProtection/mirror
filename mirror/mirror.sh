#!/bin/bash
# Energized - Mirror
#
RSK=http://rlwpx.free.fr/WPFF/hrsk.7z

echo "[+] Saving Airelle RSK"
wget -O hrsk.7z $RSK

# Decompress 7z
7z x hrsk.7z
# Copy as Txt File
cp Hosts.rsk airelle-rsk.txt
# Remove Temp RSK File
rm -rf *.rsk
rm -f hrsk.7z
# Remove first 6 Lines from RSK
sed -i '1,6d' airelle-rsk.txt