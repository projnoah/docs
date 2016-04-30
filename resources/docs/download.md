# 下载

- [直接下载](#direct-download)
    - [第一步](#direct-download-step-1)
    - [第二步](#direct-download-step-2)
- [Github下载](#github-download)
- [Composer下载](#composer-download)
    
<a name="direct-download"></a>
## 直接下载

<a name="direct-download-step-1"></a>
#### 第一步
<hr>
点击链接下载: [ProjectNoah-v0.1.0.zip](/downloads/ProjectNoah-v0.1.0.zip)

<a name="direct-download-step-2"></a>
#### 第二步
<hr>
上传压缩文件到你的**VPS/服务器**的网站根目录中

#### Linux运行命令:
```bash
unzip ProjectNoah-...zip
```

#### Windows直接解压即可

**完成后前往** [安装页面](/docs/installation)

<a name="github-download"></a>
## Github下载
<hr>
> **注意:** 使用Github下载需安装 [Composer](https://getcomposer.org/download) 才可以安装Noah, 如果对Composer没任何接触则推荐使用直接下载的方式. 

#### Linux运行命令:
在本地环境或者直接在服务器中输入:
```bash
git clone https://github.com/projnoah/noah.git
```

#### Windows:
下载即可: [Github Repo](https://github.com/projnoah/noah/archive/master.zip)

**完成后前往** [安装页面](/docs/installation)

<a name="composer-download"></a>
## Composer 下载
<hr>
> **注意:** 必须安装Composer才能继续

先`cd`到你的网站目录上级目录, 确保`网站目录名`为空文件夹
```bash
composer create-project --prefer-dist projnoah/noah 网站目录名
```

等待片刻, 下载完成后即可跳过安装步骤.