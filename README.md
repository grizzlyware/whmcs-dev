<p align="center"><a href="https://grizzlyware.io" title="Grizzlyware Ltd"><img src="https://grizzlyware.io/assets/images/grizzly-logo.svg" alt="drawing" width="300" /></a></p>

<p align="center"><img src="https://raw.githubusercontent.com/grizzlyware/whmcs-dev/master/hz_bart_meme.jpg" alt="drawing" /></p>

# WHMCS Development Vagrant Box
A Vagrant box, customised for WHMCS development, built on Ubuntu 18.04 LTS (Bionic Beaver). It sets up all the stuff you're dreading.

## Features
* PHP 7.2
* MySQL 5.7
* ionCube Loaders v10.3.5
* Cron support (every 5 minutes)

## Prerequisites
* Vagrant
* Virtualbox
* A valid WHMCS license (development licenses are fine)
* A copy of WHMCS

## Installation
1. Clone the repo to your local computer
2. Move the WHMCS source code into the `public/whmcs` directory, which should contain an `empty` file.
3. Edit the IP in `Vagrantfile` if you wish
4. Run `vagrant up`
5. Head to `192.168.13.37` (or the IP you changed it to)
6. Follow the on-screen instructions
7. Enjoy, we hope that's eased the development burden!

## Additional options

### Additional databases
You can create additional databases on first provision (or after a `vagrant destroy` and `vagrant up`). You can configure those in `config.json`. By default, only one database will be created, `whmcs_default`.

### Use a hostname
You can create a line in your systems hosts file to use a hostname instead of the boxes IP address. A [guide to edit your hosts file can be found here](https://support.rackspace.com/how-to/modify-your-hosts-file/).

### Create multiple WHMCS installations
The default installation path is `/public/whmcs` but you can move that, or create additional installations as you see fit.

### Cron job
You can remove the cron or change it's frequency as you see fit, just `vagrant-ssh` into the box and run `crontab -e` to edit it.

## MIT License
Copyright 2019 Grizzlyware Ltd

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
