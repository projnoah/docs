# 安装

- [安装程序](#installation)
    - [直接下载后的安装步骤](#direct-installation)
    - [Github下载后的安装步骤](#github-installation)
- [目录权限](#directory-permission)

<a name="installation"></a>
## 安装程序

#### 下载请前往: [下载](/docs/download)

> 安装前请确保服务器环境配置是否满足以下要求:

<div class="content-list" markdown="1">
- PHP版本 ≥ 5.5.9
- PDO PHP拓展开启
- Fileinfo PHP拓展开启
</div>

<a name="direct-installation"></a>
### 直接下载后的安装步骤
<hr>
在解压后的目录下运行命令:
```bash
cp .env.example .env && php artisan key:generate
```

<a name="github-installation"></a>
### Github下载后的安装步骤
<hr>
> 注意: 需安装Composer, 否则没有vendor文件夹无法运行程序

使用Github下载后运行命令即可:
```bash
composer install --no-scripts
cp .env.example .env && php artisan key:generate
```

<a name="directory-permission"></a>
## 目录权限
<hr>
因为后期需要后台更新写入文件, 请正确设置文件所属用户组.
假如程序放在 `/home/wwwroot/projnoah.com` 文件夹内, 并且网站默认用户组属于www（根据你的服务器用户而定）

进入网站目录后运行:
```bash
sudo chown -R www:www .
```
或者赋予写入权限即可:
```bash
sudo chmod -R 775 .
```

**安装完成, 前往:**[配置页面](/docs/configuration)
