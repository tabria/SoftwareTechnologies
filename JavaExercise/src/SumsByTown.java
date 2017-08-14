import java.util.Scanner;
import java.util.TreeMap;

public class SumsByTown {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);
        int cycles = Integer.parseInt(scanner.nextLine());

        TreeMap<String, Double> sums = new TreeMap<>();

        while(cycles>0){
            String[] townInfo = scanner.nextLine().split("\\|");
            String town = townInfo[0].trim();
            double income = Double.parseDouble(townInfo[1].trim());
            if (sums.containsKey(town)){
                income = sums.get(town) + income;
            }
            sums.put(town, income);
            cycles--;
        }

        for(String key : sums.keySet()) {
            System.out.println(key + " -> " + sums.get(key));
        }

    }
}
