# Stripe payment Symfony Bundle
The bundle is use to make payment and manage the client with strip payment gatway

# Table of Contents

* [Installation](#installation)
* [Quick Start](#quick-start)

<a name="installation"></a>
### Installation:

#### Install Package

Add CRS/SendGridBundle to your `composer.json` file.

```json
{
  "require": {
    "crs/stripe": "~1.0"
  }
}
```
Add path in appKernel.php in bundle variable.
```

        $bundles = [
            ....
            ....
            ....
            new CRS\StripeBundle\CRSStripeBundle(),
        ];
```

#### Alternative: Install package from cmd
```
	composer require crs/stripe
```
### Quick Start:
<a name="quick-start"></a>
Add configuration to your config.yml file

```
#Stripe API Access
crs_stripe:
    publishable_key: "pk_test_key" #add your publishable key here
    secret_key: "sk_test_key"   #add your secret key here
    currency: "USD" #add your currency key here
```
Note: amount should be in cent means $1 = 100 cent. So, use 100 insted of $1, 200 insted of $2 means amount = amount * 100
##### How to use:
Create an object
```
   $stripe = new crs_stripe();
```
1. For making the payment directly :
````
 $stripe->setCardNumber(<Your card Number>);
        $stripe->setName('<Card holder name>);
        $stripe->setExpMonth(<Expiration month>);
        $stripe->setExpYear('Expiration Year');
        $stripe->setCVC(<CVV number of your card>);
        $new_customer = $stripe->Charge()->Pay(<amount> * 100);
````
2. Stripe Charge retrive :
````
 $retrive_charge = $stripe->Charge()->get('ch_key');
````
3. Stripe Charge List :
````
 $retrive_charge = $stripe->Charge()->All(<perpage list>);
````
4. Stripe Customer create :
````
        $stripe->setCardNumber(<Your card Number>);
                         $stripe->setName('<Card holder name>);
                         $stripe->setExpMonth(<Expiration month>);
                         $stripe->setExpYear('Expiration Year');
                         $stripe->setCVC(<CVV number of your card>);
        $new_customer = $stripe->Customer()->Create(<Customer email-Id>);
````
5. Stripe Customer retrive :
````
 $new_customer = $stripe->Customer()->get('cus_key');
````
6. Stripe Customer list :
````
 $new_customer = $stripe->Customer()->All(<perpage list>);
````
7. Stripe Customer delete :
````
 $new_customer = $stripe->Customer()->Delete('cus_key');
````
