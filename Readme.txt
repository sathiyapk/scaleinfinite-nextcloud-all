-------------------------- Next cloud Installatopn ------------------
### Step 1: Clone the scaleinfinite-nextcloud-all Repository  
Run the following command to clone the repository:  

git clone https://github.com/sathiyapk/scaleinfinite-nextcloud-all


### Step 2: Change Directory and Clone 3rd Party Files  
Navigate to the project directory:  

cd scaleinfinite-nextcloud-all
Then, clone the 3rd party files:  

git clone https://github.com/nextcloud/3rdparty.git 

 
### Step 3: Switch the branch

git checkout e153540bcc9c2dca7742763e071b07b97d3d55b8 

### Step 4 : Create MySQL Database, Username, and Password 

MySQL -u root -p
password: <your mysql password>
 
Run the following commands to create a database and set up a user:  
```sql
CREATE DATABASE <db_name>;
Example:
CREATE TABLE nextcloud_dev;
Then
CREATE USER '<db_user>'@'localhost' IDENTIFIED BY '<db_pass>';
Example:
CREATE USER 'root_dev'@'localhost' IDENTIFIED BY 'NextCloud123!';
Then
GRANT ALL PRIVILEGES ON nextcloud_dev.* TO '<db_name>'@'localhost';
Example
GRANT ALL PRIVILEGES ON nextcloud_dev.* TO 'root_dev'@'localhost';


```
### Step 5 : Give correct ownership and permissions
chown -R www-data:www-data /var/www/html/scaleinfinite-nextcloud-all
chmod -R 755 /var/www/html/scaleinfinite-nextcloud-all


### Step 6: Install Nextcloud  
Install the Nextcloud application.

### Step 7: Install Webpack
npm install

### Step 8: Build the application
npm run build 

### Step 9: Log in as Admin and Install Required Apps  
Install the following apps:
1. Social Login  
2. External Storage  
3. OnlyOffice  

#### Step 10: Social Login Configuration  
Go to apps-> Social Communication
Download and enable Social Login apps
Then Select Administration Setting -> Social Login

- **Google APP ID**: <Place your Google App ID>  
- **Google App Secret**: <Place your Google App Secret>  

#### Step 11: External Storage (AWS Configuration)  
Enable External storage Apps
Then Select  Administration Settings-> External Storage
- **Bucket Name**: <New Bucket Name>  
- **Hostname**: <Place your host name>  
- **Port**: <Your PORT number>  
- **Region**: <Region>  
- **Storage Class**: STANDARD  

**Access Key Details**  
- **Access Key ID**: <Your Access Key ID>  
- **Access Secret Key**: <Place Your ACCESS Secret Key>  

### step 9: Update Configuration in config/config.php 
Add the following array to your config file:
'onlyoffice' => array (
    'jwt_secret' => '5iqBvm5jiEoAZmlsR5H9NyT7FngUhbLx',
    'jwt_header' => 'AuthorizationJwt',
),
'theme' => 'cloudfloat',
'enforce_theme' => 'light',

### Step 10: Build the application
npm run build 

-----------------------Cloud Float Installation ----------------------

### Step 11: Clone scaleinfinite-nextcloud in the Apps Folder  
cd apps
Clone the repository:  
```bash
git clone https://github.com/sathiyapk/scaleinfinite-nextcloud

### Step 12: Rename Folder 
Rename the folder `scaleinfinite-nextcloud` to `cloudfloat`, then install the "cloudfloat" app in **Admin > Apps**.

### Step 13: Change BASE URL in Config file

cloudfloat/src/config/config.php
BASE_URL: "https://your-domain-name/apps/cloudfloat",
(Example BASE_URL: "https://cloud.scaleinfinite.fr/apps/cloudfloat",)
save the file

### Step 14: Install Webpack
npm install

### Step 15: Build the Application
npm run build
----------------------------------------------------------------------











#### OnlyOffice Configuration  
- **Document URL**: https://onlyoffice.fltt.fr/  
- **Secret Key**: 5iqBvm5jiEoAZmlsR5H9NyT7FngUhbLx  
- **Authorization Header**: AuthorizationJwt  

### Step 6: Update Configuration in config/config.php  
Add the following array to your config file:  
```php
'onlyoffice' => array (
    'jwt_secret' => '5iqBvm5jiEoAZmlsR5H9NyT7FngUhbLx',
    'jwt_header' => 'AuthorizationJwt',
),
'theme' => 'cloudfloat',
```


```  
Rename the folder `scaleinfinite-nextcloud` to `cloudfloat`, then install the "cloudfloat" app in **Admin > Apps**.

(change the branch  - cloudfloat-vue)

### Step 8: Install the Latest Node.js Version  
Download and install the latest version of Node.js from [Node.js](https://nodejs.org/en/download/package-manager).

### Step 9: Install npm Packages  
Run the following command to install npm packages:  
```bash
npm install
```

### Step 10: Build the App  
Finally, build the app using the command:  
```bash
npm run build
```

## Only Office 504 Gateway issue Fix Steps ##
# Stop Apache
sudo systemctl stop apache2

# start nginx webserver
sudo systemctl start nginx

sudo systemctl status nginx

# Stop Apache
sudo systemctl start apache2

## Redirect Nextcloud Login page to Landing page - Add this code in Root Directory .htaccess file
  Redirect /index.php/login https://scaleinfinite.fr



