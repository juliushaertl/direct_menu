# direct_menu

**direct_menu is no longer maintained, since it will be shipped integrated in Nextcloud 12**

### Known issues

If you are running a version smaller than v0.10.2 when upgrading to Nextcloud 12 you will see the following error: 

```
EXCEPTION
OC\IntegrityCheck\Exceptions\InvalidSignatureException
Certificate is not valid.
```

You can just disable and remove the direct_menu app to fix this.


Nextcloud/OwnCloud app to provide easy access to all apps in the header 

![Screenshot of direct_menu app](https://bitgrid.net/~jus/direct_menu_nc.png)


## Installation

- Clone repository into the apps/ directory
- Enable app using owncloudconsole: ```sudo -u www-data php occ app:enable direct_menu```

## Contributors

- TheAgentK
- LukasReschke
- icewind1991
- JonesfromHan
- SonRiab
- eppfel
