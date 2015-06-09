all: zip

zip:
	cd ..; zip -9 -r direct_menu/direct_menu.zip direct_menu/ -x *.git* -x direct_menu.zip

clean:
	rm direct_menu.zip
