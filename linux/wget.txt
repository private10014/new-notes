# wget

## 1. Installing Wget
```
sudo apt install wget
```

 ##  2. Wget Command Syntax
 The  `wget`  utility expressions take the following form:

` wget [options] [url]`
-   `options`  - The  [Wget options](https://linux.die.net/man/1/wget)
-   `url`  - URL of the file or directory you want to download or synchronize.

## 3. How to Download a File with  `wget`  

```
wget https://cdn.kernel.org/pub/linux/kernel/v4.x/linux-4.17.2.tar.xz
```

## 4. Saving the Downloaded File Under Different Name 

To save the downloaded file under a different name, pass the  `-O`  option followed by the chosen name:

```
wget -O latest-hugo.zip https://github.com/gohugoio/hugo/archive/master.zip
```

The command above will save the latest  [hugo](https://gohugo.io/)  zip file from GitHub as  `latest-hugo.zip`  instead of its original name.

## 5. Downloading a File to a Specific Directory

By default,  `wget`  will save the downloaded file in the current working directory. To save the file to a specific location, use the  `-P`  option:

```
wget -P /Desktop mit.edu/centos/7/isos/x86_64/CentOS-7-x86_64-Minimal-1804.iso
```

The command above tells  `wget`  to save the CentOS 7 iso file to the  `/Desktop`  directory.

## 6. Limiting the Download Speed  

To limit the download speed, use the  `--limit-rate`  option. By default, the speed is measured in bytes/second. Append  `k`  for kilobytes,  `m`  for megabytes, and  `g`  for gigabytes.

The following command will download the Go binary and limit the download speed to 1MB:
```
wget --limit-rate=1m https://dl.google.com/go/go1.10.3.linux-amd64.tar.gz
```
This option is useful when you don’t want  `wget`  to consume all the available bandwidth.
## 7. Downloading in Background  

To download in the background, use the  `-b`  option. In the following example, we are downloading the OpenSuse iso file in the background:
```
wget -b https://download.opensuse.org/tumbleweed/iso/openSUSE-Tumbleweed-DVD-x86_64-Current.iso
```
By default, the output is redirected to  `wget-log`  file in the current directory. To watch the status of the download, use the  [`tail`](https://linuxize.com/post/linux-head-command/)  command:
```
tail -f wget-log
```

## 8. Downloading Multiple Files

If you want to download multiple files at once, use the  `-i`  option followed by the path to a local or external file containing a list of the URLs to be downloaded. Each URL needs to be on a separate line.

The following example shows how to download the Arch Linux, Debian, and Fedora iso files using the URLs specified in the  `linux-distros.txt`  file:

```
wget -i linux-distros.txt
```

linux-distros.txt

```txt
http://mirrors.edge.kernel.org/archlinux/iso/2018.06.01/archlinux-2018.06.01-x86_64.iso
https://cdimage.debian.org/debian-cd/current/amd64/iso-cd/debian-9.4.0-amd64-netinst.iso
https://download.fedoraproject.org/pub/fedora/linux/releases/28/Server/x86_64/iso/Fedora-Server-dvd-x86_64-28-1.1.iso

```

Copy

If you specify  `-`  as a filename, URLs will be read from the standard input.

## 9. Skipping Certificate Check

If you want to download a file over HTTPS from a host that has an invalid SSL certificate, use the  `--no-check-certificate`  option:

```
wget --no-check-certificate https://domain-with-invalid-ss.com
```

## 10. Creating a Mirror of a Website

To create a mirror of a website with  `wget`, use the  `-m`  option. This will create a complete local copy of the website by following and downloading all internal links as well as the website resources (JavaScript, CSS, Images).

```
wget -m https://example.com
```

If you want to use the downloaded website for local browsing, you will need to pass a few extra arguments to the command above.

```
wget -m -k -p https://example.com
```

The  `-k`  option will cause  `wget`  to convert the links in the downloaded documents to make them suitable for local viewing. The  `-p`  option will tell  `wget`  to download all necessary files for displaying the HTML page.
