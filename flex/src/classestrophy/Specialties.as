package classestrophy
{
	[RemoteClass(alias="classestrophy.Specialties")]
	public class Specialties
	{
		private var specialtiesId:Number;
		private var label:String;

		// Getters
		public function get specialtiesId() {
			return this.specialtiesId;
		}
		public function get label() {
			return this.label;
		}

		// Setters
		public function set specialtiesId(specialtiesId:Number) {
			this.specialtiesId = specialtiesId;
		}
		public function set label(label:String) {
			this.label = label;
		}
}