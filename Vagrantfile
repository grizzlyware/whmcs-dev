# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

    config.vm.box = "ubuntu/bionic64"
    config.vm.network "private_network", ip: "192.168.13.37"
    config.vm.hostname = "whmcs-dev"

    config.vm.synced_folder "./public", "/var/www/html"
    config.vm.synced_folder "./resources", "/resources"

    # WHMCS Provisioning Scripts
    config.vm.provision "shell", path: "resources/provisioning/scripts/update_packages.sh"
    config.vm.provision "shell", path: "resources/provisioning/scripts/install_services.sh"
    config.vm.provision "shell", path: "resources/provisioning/scripts/install_ioncube.sh"
    config.vm.provision "shell", path: "resources/provisioning/scripts/configure_mysql.sh"
    config.vm.provision "shell", path: "resources/provisioning/scripts/create_databases.sh"
    config.vm.provision "shell", path: "resources/provisioning/scripts/configure_whmcs.sh"
    config.vm.provision "shell", path: "resources/provisioning/scripts/install_php_modules.sh"
    config.vm.provision "shell", path: "resources/provisioning/scripts/install_crontabs.sh"
    config.vm.provision "shell", path: "resources/provisioning/scripts/restart_services.sh"

end


