app_name=$(notdir $(CURDIR))
appstore_build_directory=$(CURDIR)/build/appstore/direct_menu
appstore_artifact_directory=$(CURDIR)/build/artifacts/appstore
appstore_package_name=$(appstore_artifact_directory)/$(app_name)
occ=/home/jus/repos/nextcloud/server/occ

appstore:
	rm -rf $(appstore_build_directory) $(appstore_artifact_directory)
	mkdir -p $(appstore_build_directory) $(appstore_artifact_directory)
	cp --parents -r \
	"appinfo" \
	"controller" \
	"templates" \
	"CHANGELOG.md" \
	"LICENSE" \
	"README.md" \
	$(appstore_build_directory)
	tar -czf $(appstore_package_name).tar.gz -C $(appstore_build_directory)/../ $(app_name)	
