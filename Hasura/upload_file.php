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
		echo $disease;
		if ($disease== "lung"){
			
		}
		else if($disease== "breast"){

		}
		else if($disease== "collorectal"){

		}
		else{

		}
		sleep(20);
		// Print Saved results from file
		$t= 20;
		while (!file_get_contents('C:\Users\Vaibhav Srivastava\Desktop\Udaipur\Practice\result.txt')){
			sleep($t);
			$t= $t+10;
		}
		$c= file_get_contents('C:\Users\Vaibhav Srivastava\Desktop\Udaipur\Practice\result.txt');
		echo "<h2 style= \"background-color: red; padding: 10%;\">" . $c. "</h2>";
		// $javafile= fopen("hello.java", "w") or die ("Unable to upen file!");
			// exec("\"C:\\Program Files\\MATLAB\\MATLAB Production Server\\R2015a\\bin\\matlab.exe" -r \"run('C:\\Users\\Vaibhav Srivastava\\Desktop\\')\"");
		// $javatxt= "import java.io.PrintWriter;\r\n

		// 			public class hello\r\n

	
		// 			{\r\n

	
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
