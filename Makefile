all: zip

zip:
	cd ..; zip -9 -r direct_menu/direct_menu.zip direct_menu/ -x *.git* -x direct_menu.zip

zip-signed: sign
	cd /tmp/build; zip -9 -r direct_menu/direct_menu.zip direct_menu/ -x *.git* -x direct_menu.zip
	mv /tmp/build/direct_menu/direct_menu.zip ./

clean:
	rm direct_menu.zip
	rm -fr /tmp/build/direct_menu/

sign:
	mkdir -p /tmp/build/direct_menu/
	cp -R . /tmp/build/direct_menu/
	rm -fr /tmp/build/direct_menu/.git
	rm -fr /tmp/build/direct_menu/direct_menu.zip
	./../../occ integrity:sign-app --privateKey="/home/jus/build/owncloud/direct_menu.key" --certificate=/home/jus/build/owncloud/direct_menu.crt --path=/tmp/build/direct_menu

sign-git:
	./../../occ integrity:sign-app --privateKey="/home/jus/build/owncloud/direct_menu.key" --certificate=/home/jus/build/owncloud/direct_menu.crt --path=$(PWD)
