<meta charset="utf-8">
# 配置

- [服务器配置](#server-configurations)
    - [域名指向](#domain-binding)
    - [优雅URL](#pretty-urls)

<a name="server-configurations"></a>
## 服务器配置

<a name="domain-binding"></a>
### 域名指向

要想通过 `http://你的域名.com` 成功访问网站, 需设置指向路径, 将 `你的域名.com` 解析到文件目录下的 `public` 目录. 

假如我在服务器的程序存放路径在 `/home/wwwroot/projnoah.com`, 则设置指向的位置应为 `/home/wwwroot/projnoah.com/public`.

因为Noah程序是通过'唯一入口'文件来实现的, 所以需要指向 `public` 目录(就会执行`public/index.php`).

<a name="pretty-urls"></a>
### 优雅URL

为了让页面访问更加的优雅, 如: `http://example.com/a/b/c` 与 `http://example.com/index.php?a=b&c=d` 的对比.

需要开启重写(Rewrite)功能, 没关系, 很简单:

#### Apache
<hr>
Noah程序会自带一个 `public/.htaccess` 文件, 可以允许直接访问网站URL而去掉 `index.php`.
请确保 `mod_rewrite` 模块是开启的.

如果自带的 `.htaccess` 文件没有效果的话, 试试这个:
```apacheconf
Options +FollowSymLinks
RewriteEngine On

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^ index.php [L]
```

#### Nginx
<hr>
使用Nginx服务器的话, 则需要在 `你的域名.conf` 文件中加入:
```
location / {
    try_files $uri $uri/ /index.php?$query_string;
}
```

<hr>
配置完成, 可以前往浏览器访问 `http://你的域名.com` 来进入程序设置了!


<a name="local-configurations"></a>
## 本地配置
<hr>
如果是在本地环境运行, 为了测试开发等目的的话, 可以使用Noah自带的 `server.php`

你只需要在安装根目录中运行:
```bash
php artisan serve
```

这样就成功搭建了一个服务器, 根据反馈即可前往浏览器访问 `http://localhost:8000`