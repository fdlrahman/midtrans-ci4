--------------------

> **:warning::warning: ANNOUNCEMENT :warning::warning:**

**Please use the updated and composer compatible library: [Midtrans PHP](https://github.com/Midtrans/midtrans-php).
For better more modern composer compatibility.**

This repo still be here for archive and compatibility purpose. But it's always recommended to use the newer version [Midtrans PHP](https://github.com/Midtrans/midtrans-php).

> **:speaker: END OF ANNOUNCEMENT :speaker:**

---------------------

Midtrans Codeigniter library
=======================================================
MIdtrans :heart: CI 4!

### Requirements
The following plugin is tested under following environment:
* PHP v7.2+ or greater
* Codeigniter v4

## Installation
* Download the library and extract the .zip 
* Merge all the files to your codeigniter directory

### load library
Check to `app/controllers/Payment.php`, change with your server key, in your dashboard midtrans
```php
//set production to true for production environment
$params = array('server_key' => '<your server key>', 'production' => false);
$this->load->library('veritrans');
$this->veritrans->config($params);
```

Check to `app/views/Payment/pay.php`, change data-client-key with your client key, in your dashboard midtrans
```javascript
// Remove ".sandbox" from script src URL for production environment
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<Set your ClientKey here>"></script>
```

### DOCS

For more info please open dan read [snap docs](https://docs.midtrans.com/)

Or more clearly just click [here](https://github.com/Midtrans/midtrans-php)
