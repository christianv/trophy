package mate.business
{

	import classestrophy.User;

	import flashx.textLayout.factory.TruncationOptions;

	public class TrophyManager{

		import mate.events.*;

		import mx.collections.ArrayCollection;
		import mx.controls.Alert;
		import mx.rpc.Fault;
		import mx.utils.ArrayUtil;

		private var _isLoggedIn:Boolean = false;
		private var _user:User;

		// Getters & Setters

		public function get user():User
		{
			return _user;
		}

		public function set user(value:User):void
		{
			_user = value;
		}

		public function get isLoggedIn():Boolean {
			return _isLoggedIn;
		}
		public function set isLoggedIn(value:Boolean):void {
			_isLoggedIn = value;
		}

		public function RegisterCompleted(resultObject:Object):void {
			if(resultObject) {
				Alert.show("ok");
			} else {
				Alert.show("nok");
			}
		}

		public function LoginCompleted(resultObject:Object):void {
			if(resultObject[0].userId){
				user = new User();
				user.firstName = resultObject[0].firstName;
				user.lastName = resultObject[0].lastName;
				user.email = resultObject[0].email;
				user.userId = resultObject[0].userId;
				isLoggedIn = true;
				Alert.show(user.firstName + "");
			} else {
				isLoggedIn = false;
			}
		}

		public function HandleFault(fault:Fault):void{
			Alert.show(fault.faultString, fault.faultCode.toString());
		}

	}
}