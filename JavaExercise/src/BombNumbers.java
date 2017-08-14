import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
import java.util.Scanner;


public class BombNumbers {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);


        int[] arr = Arrays.stream(scanner.nextLine().split(" "))
                            .mapToInt(Integer::parseInt)
                            .toArray();
        int[] bombInfo = Arrays.stream(scanner.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();


        List<Integer> bombNumbers = new ArrayList<>();
        for(int i=0; i<arr.length; i++){
            bombNumbers.add(arr[i]);
        }

        while (bombNumbers.contains(bombInfo[0])){
            RemoveNeighbors(bombNumbers, bombInfo, "left");
            RemoveNeighbors(bombNumbers, bombInfo, "right");

            int specialBombIndex = bombNumbers.indexOf(bombInfo[0]);
            bombNumbers.remove(specialBombIndex);
        }

        int sum = bombNumbers.stream().mapToInt(Integer::intValue).sum();
        System.out.println(sum);
    }

    private static void RemoveNeighbors(List<Integer> bombNumbers, int[] bombInfo, String direction) {

        for(int i=0; i<bombInfo[1]; i++){
            int specialBombNumberIndex = bombNumbers.indexOf(bombInfo[0]);
            if (direction.equals("left")) {
                try {
                    bombNumbers.remove(specialBombNumberIndex -1);
                } catch (Exception e) {
                    break;
                }
            } else {
                try {
                    bombNumbers.remove(specialBombNumberIndex +1);
                } catch (Exception e) {
                    break;
                }
            }
        }

    }


}
