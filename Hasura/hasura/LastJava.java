import java.io.*;
import java.io.FileInputStream;
import java.io.BufferedReader;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.FileReader;


 public class LastJava
 {
 public static void main(String[] args) throws IOException
  {
    String[] country= new String[8];
    String[] country1= new String[307];
       String csvFile = "C:/xampp/htdocs/hasura/Test.csv";
       String xlsFile = "C:/xampp/htdocs/hasura/Runner1.csv";
       BufferedReader br = null;
        String line = "";
        String cvsSplitBy = ",";
        BufferedReader br1 = null;
        String line1 = "";
        String cvsSplitBy1 = ",";
        // System.out.println("hello");

        try {

            br = new BufferedReader(new FileReader(csvFile));
            while ((line = br.readLine()) != null) {

                // use comma as separator
                country = line.split(cvsSplitBy);

                // System.out.println(country[2]);

            }

        } catch (FileNotFoundException e) {
            e.printStackTrace();
        } catch (IOException e) {
            e.printStackTrace();
        } finally {
            if (br != null) {
                try {
                    br.close();
                } catch (IOException e) {
                    e.printStackTrace();
                }
            }
        }
        try {

            br1 = new BufferedReader(new FileReader(xlsFile));
            while ((line1 = br1.readLine()) != null) {

                // use comma as separator
                country1 = line1.split(cvsSplitBy1);

                

            }
          

        } catch (FileNotFoundException e) {
            e.printStackTrace();
        } catch (IOException e) {
            e.printStackTrace();
        } finally {
            if (br1 != null) {
                try {
                    br1.close();
                } catch (IOException e) {
                    e.printStackTrace();
                }
            }
        }
        int[] ar= {0, 22, 46, 109, 176, 299, 304, 307};
        int k= 0;
// int[] ar1= new int[308];
int[] ar2= new int[308];
ar2[0]= Integer.parseInt(country[0]);
for(int j= 1; j< country.length; j++){
    // System.out.println("j "+j);
    for (int i= (ar[j-1]); i< (ar[j]); i++){
        // System.out.println("i "+i);
        // System.out.println(country.length);
        // System.out.println("country1" +country1.length);
        if(country[j].equals(country1[i])){
            ar2[i+1]= 1;
            k++;
            // System.out.println("k "+k);
        }
        else{
            ar2[i+1]= 0;
            k++;
        }
    }
    k= 0;
}
       for (int i= 0; i< 308; i++){
        System.out.print(ar2[i]+ " ");
       }
FileWriter writer= new FileWriter("myfile.csv");
for(int j= 0; j< ar2.length; j++){
    writer.append(String.valueOf(ar2[j]));
    writer.append(",");
}
writer.close();
  }
}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */