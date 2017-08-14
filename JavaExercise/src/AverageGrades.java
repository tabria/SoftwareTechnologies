
import java.util.Arrays;
import java.util.Scanner;

public class AverageGrades {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        Student[] allStudents = GetStudentsData(scanner);

        Student[] arr = Arrays.stream(allStudents).filter(s->s.getAverageGrades() >= 5.00)
                .sorted((s1, s2) -> {
                    int comparitionResult = s1.getName().compareTo(s2.getName());
                    if (comparitionResult == 0) {
                        comparitionResult = Double.compare(s2.getAverageGrades(), s1.getAverageGrades());
                    }
                    return comparitionResult;
                })
                .toArray(Student[]::new);


        for(int i=0; i<arr.length; i++){
            System.out.println(String.format(
                    arr[i].Name + " -> " + "%.2f",arr[i].getAverageGrades()
            ));
        }
    }

    private static Student[] GetStudentsData(Scanner scanner) {

        int cycles = Integer.parseInt(scanner.nextLine());
        Student[] studentsData = new Student[cycles];

        for (int i=0; i<cycles; i++){

            String[] currentStudent = scanner.nextLine().split(" ");

            Student student = new Student();
            student.Name = currentStudent[0];
            student.Grades = Arrays.stream(currentStudent).skip(1)
                            .mapToDouble(Double::parseDouble).toArray();

            studentsData[i] = student;
        }
        return studentsData;
    }

    static class Student {

        public String Name;
        public double[] Grades;
        public double AverageGrades;

        public String getName() {
            return Name;
        }

        public void setName(String name) {
            Name = name;
        }

        public double[] getGrades() {
            return Grades;
        }

        public void setGrades(double[] grades) {
            Grades = grades;
        }

        public Double getAverageGrades() {
            double sum = 0;
            for(int i=0; i<Grades.length; i++){
                sum += Grades[i];
            }
            return sum/Grades.length;
        }


    }
}
