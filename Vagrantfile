# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "custom-box"
  config.vm.box_url = "https://s3.eu-central-1.amazonaws.com/ffuenf-vagrantboxes/debian/debian-7.8.0-amd64_virtualbox.box"
  config.vm.hostname = "data-fixtures-dev"
  config.vm.synced_folder ".", "/vagrant", :nfs => true
  config.vm.network :private_network, ip: "10.2.254.10"
  config.vm.provision :chef_solo do |chef|
      chef.cookbooks_path = "Vagrant/chef/cookbooks"
      chef.log_level = ENV['CHEF_LOG'] || "info"
      chef.add_recipe("default")
    end
  end
