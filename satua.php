<?php
/**
* 
*/
class MoTV
{
	//befor refactor
	function isActiveAccount($account)
	{
		if ($account == 'active'){
			return TRUE;
		}
	}
	function isExpiredVoucher($account)
	{	if ($account == 'expired')
			return TRUE:
		}
	function isInvalidIdNumber($account)
	{
		if ($account == 'invalidnumber')
			return TRUE;
		}
	function main($accountActive, $accountVoucher, $accountId){
		if ($this->isActiveAccount($accountActive) == TRUE){
			if ($this->isExpiredVoucher($accountVoucher) == TRUE){
				return 'Reedem Voucher';
			} else{
				if ($this->isInvalidIdNumber($accountId) == TRUE){
					return 'Your Id Number is Invalid'
				}else {
					return 'Buy account or reedem voucher'
				}
			}
		} else{
			return 'Your account is Unactive, you can buy account or redeem voucher'
		}
	}
}
class MoTV
{
	function isUnactiveAccount($account){
		if ($account == 'unactive'){
			return TRUE;
		}
	}
	function isExpiredVoucher($account){
		if ($account == 'expired'){
			return TRUE;
		}
	}
	function invalidIdNumber($account){
		if ($account == 'invalid'){
			return TRUE;
		}
	}
	function main($account)
		if ($this->isUnactiveAccount($account) ==TRUE){
			return 'Your Account is unactive';
		}
		if ($this->isExpiredVoucher($account) == TRUE){
			return 'Your voucher is Expired';
		}
		if ($this->invalidnumber($account) == TRUE){
			return 'Your Id Number is Invalid'
		}
		return 'You can buy account or reedem voucher'
}

?>