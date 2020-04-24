# Web Monetization Plugin

The **Web Monetization** Plugin is an extension for [Grav CMS](https://getgrav.org/).

It adds a meta tag on the website pointing to the wallet that will receive the payments.

## Installation

Installing the Web Monetization plugin can be done with git or a zip file.

### Git Installation

In the terminal, go to the root of your Grav installation, then enter:

```shell
cd user/plugins && git clone git@framagit.org:arkhi/grav-plugin-web-monetization.git web-monetization
```

### Zip file Installation

To install the plugin manually, download the zip version of this repository and unzip it in the `user/plugins` directory. Then rename the directory to `web-monetization`. You can find these files on [Gitlab](https://framagit.org/arkhi/grav-plugin-web-monetization).

---

You should now have all the plugin files under `user/plugins/web-monetization`.

## Usage

1. [Choose a _Wallet_](https://webmonetization.org/docs/ilp-wallets) to point to.
2. Configure this plugin with the _Pointer_ to the _Wallet_ you just created.

## Configuration

**Nota‑bene:** If you use the Admin Plugin, a file with your configuration named “web-monetization.yaml” will be saved in the `user/config/plugins/` directory once the configuration is saved in the Admin.

1. Make sure the file `user/config/plugins/web-monetization.yaml` mirrors `user/plugins/web-monetization/web-monetization.yaml`
1. Only edit `user/config/plugins/web-monetization.yaml`.

Here is the default configuration and an explanation of available options:

```yaml
---
enabled: true
pointer: null
```

- _pointer_ needs to point to the wallet that will receive the payment.

## Contributing

If you think something can be improved, please submit Issues or make a Pull Request. All comments and collaboration are welcome.
