<?php  
$conn = mysqli_connect("localhost","root","","uts");

 function query ($query){
		global $conn;
		$result = mysqli_query ($conn,$query);
		$rows = [];

		while ($mhs = mysqli_fetch_assoc($result)) {
			$rows[]=$mhs;
		}
		return $rows;
	}
		function hapus ($id){
		global $conn;
		mysqli_query($conn, "DELETE FROM blog WHERE id = $id");
		return mysqli_affected_rows($conn); }

		function update($data){
		global $conn;
   			 $id = $data["id"];
	         $nama = htmlspecialchars($data["nama"]);
	         $nopeserta = htmlspecialchars($data["nopeserta"]);
	         $asalsekolah = htmlspecialchars($data["asalsekolah"]);

	         $query = "UPDATE blog SET  nama = '$nama', nopeserta = '$nopeserta', asalsekolah = '$asalsekolah'  WHERE id = $id";

		mysqli_query ($conn, $query);
		return mysqli_affected_rows ($conn);}

		
?>
