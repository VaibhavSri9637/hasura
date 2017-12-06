<?php
	if(isset($_POST['submit'])){
		$disease= trim($_POST['diseases']);
		$codon= trim($_POST['codon']);
		$wtaa3= trim($_POST['wtaa3']);
		$mutantaa3= trim($_POST['mutantaa3']);
		$wtcodon= trim($_POST['wtcodon']);
		$mutantcodon= trim($_POST['mutantcodon']);
		$mutationalevent= trim($_POST['mutationalevent']);
		$type= trim($_POST['type']);
		$mutanttype= trim($_POST['mutanttype']);
		$myfile = fopen("newfile.csv", "w") or die("Unable to open file!");
		$txt = $codon . "," . $wtaa3 . "," . $mutantaa3 . "," . $wtcodon . "," . $mutantcodon . "," . $mutationalevent .  "," . $type . "," . $mutanttype;
		fwrite($myfile, $txt);
		fclose($myfile);
		exec("javac LastJava.java");
		exec("java LastJava");
		// echo $disease;
		if ($disease== 'lung'){
			exec("\"C:\\Program Files\\MATLAB\\MATLAB Production Server\\R2015a\\bin\\matlab.exe\" -r \"run('C:\\xampp\\htdocs\\M21.m')\"");
		}
		else if($disease== "breast"){
			exec("\"C:\\Program Files\\MATLAB\\MATLAB Production Server\\R2015a\\bin\\matlab.exe\" -r \"run('C:\\xampp\\htdocs\\M35.m')\"");
		}
		else if($disease== "collorectal"){
			exec("\"C:\\Program Files\\MATLAB\\MATLAB Production Server\\R2015a\\bin\\matlab.exe\" -r \"run('C:\\xampp\\htdocs\\Simple.m')\"");
		}
		else{
			exec("\"C:\\Program Files\\MATLAB\\MATLAB Production Server\\R2015a\\bin\\matlab.exe\" -r \"run('C:\\xampp\\htdocs\\M23.m')\"");
		}
		sleep(20);
		// Print Saved results from file
		$t= 20;
		while (!file_exists('C:\\xampp\\htdocs\\result.txt')){
			sleep($t);
			$t= $t+10;
		}
		$c= file_get_contents('C:\\xampp\\htdocs\\result.txt');
		echo "<h2 style= \"background-color: red; padding: 10%;margin-left: 20%; margin-right: 20%; text-align: center;\">" . $c. "</h2>";
		unlink('myfile.csv');
		unlink('newfile.csv');
		unlink('result.txt');
		unlink('LastJava.class');
		// $javafile= fopen("hello.java", "w") or die ("Unable to upen file!");
			// exec("\"C:\\Program Files\\MATLAB\\MATLAB Production Server\\R2015a\\bin\\matlab.exe" -r \"run('C:\\Users\\Vaibhav Srivastava\\Desktop\\')\"");
		// $javatxt= "import java.io.PrintWriter;\r\n

		// 			public class hello\r\n

	
		// 			{\r\n
// exec("\"C:\\Program Files\\MATLAB\\MATLAB Production Server\\R2015a\\bin\\matlab.exe" -r \"run('C:\\Users\\Vaibhav Srivastava\\Desktop\\')\"");
	
		// 			    public static void main(String args[]) throws Exception\r\n

	
		// 			    {\r\n

	
		// 			    	String fileName= \"out.txt\";\r\n

	
		// 			    	PrintWriter writer= new PrintWriter(fileName);\r\n

	
		// 			    	writer.println(\"hello world\");\r\n

	
		// 			        System.out.println(\"Hello World\");\r\n

	
		// 			        writer.close();\r\n

	
		// 			    }\r\n

	
		// 			} ";
		// fwrite($javafile, $javatxt);
		// fclose($javafile);
		// echo "<br> Printing 1 <br>";
		// $d= file_get_contents('hello.java');

		// echo "<br>" . $d;

		// echo "<br>";
		//  echo "<a href= \"download.php?file=hello.java\">Download</a>". "<br>";
		// echo "initial ". getcwd() . "<br>";
		// exec("javac hello.java");
		// exec("java hello");
		// if ($handle = opendir('.')) {
		//     while (false !== ($entry = readdir($handle))) {
		//         if ($entry != "." && $entry != "..") {
		//             echo "$entry ";
		//         }
		//     }
		//     closedir($handle);
		// }
	}
		// 5 Seconds delay
		// sleep(20);
		// //Print Saved results from file
		// $t= 20;
		// while (!file_get_contents('C:\Users\Vaibhav Srivastava\Desktop\Udaipur\Practice\result.txt')){
		// 	sleep($t);
		// 	$t= $t+10;
		// }
		// $c= file_get_contents('C:\Users\Vaibhav Srivastava\Desktop\Udaipur\Practice\result.txt');
		// echo $c;
		?>
		<!-- ($codon . "\n" . $wtaa3 . "\n" . $mutantaa3 . "\n" . $wtcodon . "\n" . $mutantcodon . "\n" . $mutationalevent . "\n" . $type . "\n" . $mutanttype); -->
