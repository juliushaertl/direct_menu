app_name=$(notdir $(CURDIR))
appstore_build_directory=$(CURDIR)/build/appstore/direct_menu
appstore_artifact_directory=$(CURDIR)/build/artifacts/appstore
appstore_package_name=$(appstore_artifact_directory)/$(app_name)
occ=/home/jus/repos/nextcloud/server/occ
private_key=/home/jus/build/owncloud/direct_menu.key
certificate=/home/jus/build/owncloud/direct_menu.crt

appstore:
	rm -rf $(appstore_build_directory) $(appstore_artifact_directory)
	mkdir -p $(appstore_build_directory) $(appstore_artifact_directory)
	cp --parents -r \
	"appinfo" \
	"lib" \
	"templates" \
	"CHANGELOG" \
	"LICENSE" \
	"README.md" \
	$(appstore_build_directory)
	php -f $(occ) integrity:sign-app --privateKey="$(private_key)" --certificate="$(certificate)" --path "$(appstore_build_directory)"
	tar -czf $(appstore_package_name).tar.gz -C $(appstore_build_directory)/../ $(app_name)	
