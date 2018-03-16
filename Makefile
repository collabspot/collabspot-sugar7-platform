MANIFEST_VERSION := $(shell grep "'version' => " manifest.php | cut -d' ' -f 5 | sed "s/'//g" | sed "s/,//g")

zip:
	zip -r collabspot-sugar7-platform-$(MANIFEST_VERSION).zip LICENSE.txt manifest.php src
	@echo "Zipped to collabspot-sugar7-platform-$(MANIFEST_VERSION).zip"

help:
	@echo "zip - (default) generate zip file"

