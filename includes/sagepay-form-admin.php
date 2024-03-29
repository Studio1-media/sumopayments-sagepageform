<?php
			$this->form_fields = array(
				'enabled'           => array(
				    'title'         => __( 'Enable/Disable', 'sumopayments_sagepayform' ),
				    'label'         => __( 'Enable SagePay Form', 'sumopayments_sagepayform' ),
				    'type'          => 'checkbox',
				    'description'   => '',
				    'default'       => $this->default_enabled
				),
				'initial_options' 	=> array(
					'title' 		=> __( 'Initial Setup Options', 'sumopayments_sagepayform' ),
					'type' 			=> 'title',
					'description' 	=> __( '<div style="display:block; border-bottom:1px dotted #000; width:100%;"></div>', 'sumopayments_sagepayform' )
				),
				'debugmode'         => array(
				    'title'         => __( 'Debug Mode', 'sumopayments_sagepayform' ),
				    'type'          => 'checkbox',
				    'options'       => array('no'=>'No','yes'=>'Yes'),
				    'label'     	=> __( 'Enable Debug Mode', 'sumopayments_sagepayform' ),
				    'default'       => $this->default_debug
				),
				'status'            => array(
				    'title'         => __( 'Status', 'sumopayments_sagepayform' ),
				    'type'          => 'select',
				    'options'       => array('live'=>'Live','testing'=>'Testing'),
				    'description'   => __( 'Set SagePay Live/Testing Status.', 'sumopayments_sagepayform' ),
				    'default'       => $this->default_status,
					'desc_tip'    	=> true,
				),
				'vendor'            => array(
				    'title'         => __( 'Vendor Name', 'sumopayments_sagepayform' ),
				    'type'          => 'text',
				    'description'   => __( 'This should have been supplied by SagePay when you created your account.', 'sumopayments_sagepayform' ),
				    'default'       => $this->default_vendor,
					'desc_tip'    	=> true,
				),
				'vendorpwd'         => array(
				    'title'         => __( 'LIVE Encryption Password', 'sumopayments_sagepayform' ),
				    'type'          => 'text',
				    'description'   => __( 'This should have been supplied by SagePay when you created your account. This NOT the vendor password', 'sumopayments_sagepayform' ),
				    'default'       => $this->default_vendorpwd,
					'desc_tip'    	=> true,
				),
				'testvendorpwd'     => array(
				    'title'         => __( 'Testing Encryption Password', 'sumopayments_sagepayform' ),
				    'type'          => 'text',
				    'description'   => __( 'This should have been supplied by SagePay when you created your account. This NOT the vendor password', 'sumopayments_sagepayform' ),
				    'default'       => $this->default_testvendorpwd,
					'desc_tip'    	=> true,
				),
				'txtype'            => array(
				    'title'         => __( "SagePay Transaction Type", 'sumopayments_sagepayform' ),
				    'type'          => 'select',
				    'options'       => array('PAYMENT'=>'PAYMENT','DEFERRED'=>'DEFERRED','AUTHENTICATE'=>'AUTHENTICATE'),
				    'description'   => __( "<br/>By default a PAYMENT transaction type is used to gain an authorisation from the bank, then settle that transaction early the following morning, committing the funds to be taken from your customer's card.<br/><br/>In some cases you may not wish to take the funds from the card immediately, but merely place a shadow on the customer's card to ensure they cannot subsequently spend those funds elsewhere, and then only take the money when you are ready to ship the goods. This type of transaction is called a DEFERRED transaction.<br/><br/>The AUTHENTICATE and AUTHORISE methods are specifically for use by merchants who are either (i) unable to fulfil the majority of orders in less than 6 days (or sometimes need to fulfil them after 30 days) or (ii) do not know the exact amount of the transaction at the time the order is placed (for example, items shipped priced by weight, or items affected by foreign exchange rates).<br/><br/>Unlike normal PAYMENT or DEFERRED transactions, AUTHENTICATE transactions do not obtain an authorisation at the time the order is placed. Instead the card and card holder are validated using the 3D-Secure mechanism provided by the card-schemes and card issuing banks, with a view to later authorisation.", 'sumopayments_sagepayform' ),
				    'default'       => $this->default_txtype,
					'desc_tip'    	=> true,
				),
				'basketoption'     	=> array(
				    'title'         => __( 'Basket Option', 'sumopayments_sagepayform' ),
				    'type' 			=> 'select',
					'options' 		=> array('0'=>'Do not send the basket to Sage','1'=>'Send the basket in standard format','2'=>'Send the basket in XML format'),
				    'label'     	=> __( '', 'sumopayments_sagepayform' ),
				    'description' 	=> __( 'Optionally you can send the contents of the shopping cart to Sage, this will show up in MySagePay and in certain emails.', 'sumopayments_sagepayform' ),
				    'default'       => 1,
					'desc_tip'    	=> true,
				),
				'checkout_options' 	=> array(
					'title' 		=> __( 'Checkout Options', 'sumopayments_sagepayform' ),
					'type' 			=> 'title',
					'description' 	=> __( '<div style="display:block; border-bottom:1px dotted #000; width:100%;">This section controls what is shown on the checkout page.</div>', 'sumopayments_sagepayform' )
				),
				'title'             => array(
				    'title'         => __( 'Title', 'sumopayments_sagepayform' ),
				    'type'          => 'text',
				    'description'   => __( 'This controls the title which the user sees during checkout.', 'sumopayments_sagepayform' ),
				    'default'       => $this->default_title,
					'desc_tip'    	=> true,
				),
				'description'       => array(
				    'title'         => __( 'Description', 'sumopayments_sagepayform' ),
				    'type'          => 'textarea',
				    'description'   => __( 'This controls the description which the user sees during checkout.', 'sumopayments_sagepayform' ),
				    'default'       => $this->default_description,
					'desc_tip'    	=> true,
				),
				'order_button_text'		=> array(
					'title' 		=> __( 'Checkout Pay Button Text', 'sumopayments_sagepayform' ),
					'type' 			=> 'text',
					'description' 	=> __( 'This controls the pay button text shown during checkout.', 'sumopayments_sagepayform' ),
					'default' 		=> $this->default_order_button_text,
					'desc_tip'    	=> true,
				),
				'cardtypes'			=> array(
					'title' 		=> __( 'Accepted Cards', 'sumopayments_sagepayform' ),
					'type' 			=> 'multiselect',
					'class'			=> 'chosen_select',
					'css'         	=> 'width: 350px;',
					'description' 	=> __( 'Select which card types to accept.', 'sumopayments_sagepayform' ),
					'options' 		=> $this->sage_cardtypes,
					'desc_tip'    	=> true,
				),
				'sagelink' 			=> array(
					'title' 		=> __( '"What is SagePay" Link', 'sumopayments_sagepayform' ),
					'type' 			=> 'select',
					'options' 		=> array('yes'=>'Yes','no'=>'No'),
					'description' 	=> __( 'Include a "What is SagePay" link on the checkout to give customers more confidence. (If the SagePay logo option is set to yes then the logo becomes the link)', 'sumopayments_sagepayform' ),
					'default' 		=> $this->default_sagelink,
					'desc_tip'    	=> true,
				),
				'sagelogo' 			=> array(
					'title' 		=> __( 'SagePay Logo', 'sumopayments_sagepayform' ),
					'type' 			=> 'select',
					'options' 		=> array('yes'=>'Yes','no'=>'No'),
					'description' 	=> __( 'Include the SagePay logo on the checkout.', 'sumopayments_sagepayform' ),
					'default' 		=> $this->default_sagelogo,
					'desc_tip'    	=> true,
				),

				'sagepay_options' 	=> array(
					'title' 		=> __( 'SagePay Options', 'sumopayments_sagepayform' ),
					'type' 			=> 'title',
					'description' 	=> __( '<div style="display:block; border-bottom:1px dotted #000; width:100%;"> </div>', 'sumopayments_sagepayform' )
				),
				'email'             => array(
				    'title'         => __( 'Vendor Email Address', 'sumopayments_sagepayform' ),
				    'type'          => 'text',
				    'description'   => __( 'Please enter your email address; If provided, an e-mail will be sent to this address when each transaction completes (successfully or otherwise). If you wish to use multiple email addresses, you should add them using the : (colon) character as a separator e.g. <code>me@mail1.com:me@mail2.com</code>', 'sumopayments_sagepayform' ),
				    'default'       => $this->default_email,
					'desc_tip'    	=> true,
				),
				'sendemail'         => array(
				    'title'         => __( 'Transaction Email Status', 'sumopayments_sagepayform' ),
				    'type'          => 'select',
				    'options'       => array('0'=>'Do not send either customer or vendor e-mails','1'=>'Send customer and vendor e-mails if addresses are provided','2'=>'Send vendor e-mail but NOT the customer e-mail'),
				    'default'       => $this->default_sendemail,
					'desc_tip'    	=> true,
				),
				'allow_gift_aid'        => array(
				    'title'         => __( 'Allow Gift Aid', 'sumopayments_sagepayform' ),
				    'type'          => 'checkbox',
				    'description'   => __( 'Enable this to allow the gift aid acceptance box to appear on the payment page. This option only makes a difference if your vendor account is Gift Aid enabled.', 'sumopayments_sagepayform' ),
				    'default'       => $this->default_allow_gift_aid,
					'desc_tip'    	=> true,
				),
				'apply_avs_cv2'     => array(
				    'title'         => __( 'AVS / CV2 Status', 'sumopayments_sagepayform' ),
				    'type'          => 'select',
				    'options'       => array('0'=>'If AVS/CV2 enabled then check them. If rules apply, use rules.','1'=>'Force AVS/CV2 checks even if not enabled for the account. If rules apply, use rules.','2'=>'Force NO AVS/CV2 checks even if enabled on account.','3'=>'Force AVS/CV2 checks even if not enabled for the account but DON’T apply any rules.'),
				    'description'   => __( 'Using this flag you can fine tune the AVS/CV2 checks and rule set you’ve defined at a transaction level. This is useful in circumstances where direct and trusted customer contact has been established and you wish to override the default security checks.', 'sumopayments_sagepayform' ),
				    'default'       => $this->default_apply_avs_cv2,
					'desc_tip'    	=> true,
				),
				'apply_3dsecure'    => array(
				    'title'         => __( '3D Secure Status', 'sumopayments_sagepayform' ),
				    'type'          => 'select',
				    'options'       => array('0'=>'If 3D-Secure checks are possible and rules allow, perform the checks and apply the authorisation rules','1'=>'Force 3D-Secure checks for this transaction if possible and apply rules for authorisation.','2'=>'Do not perform 3D-Secure checks for this transaction and always authorise.','3'=>'Force 3D-Secure checks for this transaction if possible but ALWAYS obtain an auth code, irrespective of rule base.'),
				    'description'   => __( 'Using this flag you can fine tune the 3D Secure checks and rule set you’ve defined at a transaction level. This is useful in circumstances where direct and trusted customer contact has been established and you wish to override the default security checks.', 'sumopayments_sagepayform' ),
				    'default'       => $this->default_apply_3dsecure,
					'desc_tip'    	=> true,
				),
				'vendortxcodeprefix'=> array(
				    'title'         => __( 'VendorTXCode Prefix', 'sumopayments_sagepayform' ),
				    'type'          => 'text',
				    'description'   => __( 'Add a custom prefix to the VendorTXCode. Only use letters, numbers and _ (underscores) any other characters will be stripped from the field.', 'sumopayments_sagepayform' ),
				    'default'       => $this->default_vendortxcodeprefix,
					'desc_tip'    	=> true,
				),
				'surcharge_options' 	=> array(
					'title' 		=> __( 'Optionally Setup Surcharges', 'sumopayments_sagepayform' ),
					'type' 			=> 'title',
					'description' 	=> __( '<div style="display:block; border-bottom:1px dotted #000; width:100%;">You can create surcharges for specific card types if required, these are shown to the customer once they have selected their card type and added to the order total.<br /><br />The format should be method|value, where method is either P for percentage or F for fixed and the surchage value eg P|5 would give a 5% surcharge, F|2.50 would give a fixed surchage of 2.50. Leave blank for no surcharge for that payment method</div>', 'sumopayments_sagepayform' )
				),
				'enablesurcharges'  => array(
				    'title'         => __( 'Sage Surcharges', 'sumopayments_sagepayform' ),
				    'type'          => 'checkbox',
				    'options'       => array('no'=>'No','yes'=>'Yes'),
				    'label'     	=> __( 'Enable Sage Surcharges.', 'sumopayments_sagepayform' ),
				    'default'       => $this->default_enablesurcharges,
					'desc_tip'    	=> true,
				),
				'visasurcharges'   	=> array(
				    'title'         => __( 'Surcharge for Visa Card', 'sumopayments_sagepayform' ),
				    'type'          => 'text',
				    'description'   => __( '', 'sumopayments_sagepayform' ),
				    'default'       => $this->default_VISAsurcharges
				),
				'visadebitsurcharges'=> array(
				    'title'         => __( 'Surcharge for Visa Debit / Delta Card', 'sumopayments_sagepayform' ),
				    'type'          => 'text',
				    'description'   => __( '', 'sumopayments_sagepayform' ),
				    'default'       => $this->default_DELTAsurcharges
				),
				'visaelectronsurcharges'=> array(
				    'title'         => __( 'Surcharge for Visa Electron', 'sumopayments_sagepayform' ),
				    'type'          => 'text',
				    'description'   => __( '', 'sumopayments_sagepayform' ),
				    'default'       => $this->default_UKEsurcharges
				),
				'mcsurcharges'   	=> array(
				    'title'         => __( 'Surcharge for MasterCard', 'sumopayments_sagepayform' ),
				    'type'          => 'text',
				    'description'   => __( '', 'sumopayments_sagepayform' ),
				    'default'       => $this->default_MCsurcharges
				),
				'mcdebitsurcharges' => array(
				    'title'         => __( 'Surcharge for MasterCard Debit Card', 'sumopayments_sagepayform' ),
				    'type'          => 'text',
				    'description'   => __( '', 'sumopayments_sagepayform' ),
				    'default'       => $this->default_MCDEBITsurcharges
				),
				'maestrosurcharges' => array(
				    'title'         => __( 'Surcharge for Maestro Card', 'sumopayments_sagepayform' ),
				    'type'          => 'text',
				    'description'   => __( '', 'sumopayments_sagepayform' ),
				    'default'       => $this->default_MAESTROsurcharges
				),
				'amexsurcharges'   	=> array(
				    'title'         => __( 'Surcharge for American Express', 'sumopayments_sagepayform' ),
				    'type'          => 'text',
				    'description'   => __( '', 'sumopayments_sagepayform' ),
				    'default'       => $this->default_AMEXsurcharges
				),
				'dinerssurcharges'	=> array(
				    'title'         => __( 'Surcharge for Diners Card', 'sumopayments_sagepayform' ),
				    'type'          => 'text',
				    'description'   => __( '', 'sumopayments_sagepayform' ),
				    'default'       => $this->default_DCsurcharges
				),
				'jcbsurcharges' 	=> array(
				    'title'         => __( 'Surcharge for JCB Card', 'sumopayments_sagepayform' ),
				    'type'          => 'text',
				    'description'   => __( '', 'sumopayments_sagepayform' ),
				    'default'       => $this->default_JCBsurcharges
				),
				'lasersurcharges' 	=> array(
				    'title'         => __( 'Surcharge for Laser Card', 'sumopayments_sagepayform' ),
				    'type'          => 'text',
				    'description'   => __( '', 'sumopayments_sagepayform' ),
				    'default'       => $this->default_LASERsurcharges
				),
			);
