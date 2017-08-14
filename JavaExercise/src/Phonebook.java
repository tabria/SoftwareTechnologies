
import java.util.Scanner;
import java.util.TreeMap;

public class Phonebook {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        TreeMap<String, String> phoneBook = new TreeMap<String, String>();

        while(true){

            String[] personInfo = scanner.nextLine().split(" ");

            String action = personInfo[0];
            if (action.equals("END")){
                break;
            }

            if (action.equals("A")){

                AddPerson(personInfo, phoneBook);

            } else if (action.equals("S")) {

                PrintPerson(personInfo, phoneBook);

            } else if (action.equals("ListAll")){

                PrintLexographically(personInfo, phoneBook);

            }
        }
    }

    public static void PrintLexographically(String[] personInfo, TreeMap<String, String> phoneBook) {
        for(String element:phoneBook.keySet()){
            System.out.println(element + " -> " + phoneBook.get(element));
        }

    }

    public static void PrintPerson(String[] personInfo, TreeMap<String, String> phoneBook) {
        String personName = personInfo[1];
        if (phoneBook.containsKey(personName)) {
            System.out.println(String.format("%s -> %s", personName, phoneBook.get(personName)));
        } else {
            System.out.println("Contact " + personName + " does not exist.");
        }


    }

    public static void AddPerson(String[] personInfo, TreeMap<String, String> phoneBook) {

            String personName = personInfo[1];
            String personPhone = personInfo[2];
            phoneBook.put(personName, personPhone);
    }

}
