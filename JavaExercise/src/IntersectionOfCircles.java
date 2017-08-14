import java.util.Arrays;
import java.util.Scanner;

public class IntersectionOfCircles {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        Circle circleA = GetCirclePoints(scanner);
        Circle circleB = GetCirclePoints(scanner);

        System.out.println(isIntersect(circleA, circleB) ? "Yes" : "No");

    }

    private static boolean isIntersect(Circle circleA, Circle circleB) {

        double centerDistance = CalculateDistance(circleA, circleB);
        int circleCombineRadius = circleA.radius + circleB.radius;

        return circleCombineRadius >= centerDistance;
    }

    private static double CalculateDistance(Circle circleA, Circle circleB) {

        double deltaX = Math.abs(circleA.Center.x - circleB.Center.x);
        double deltaY = Math.abs(circleA.Center.y - circleB.Center.y);

        return Math.sqrt(deltaX * deltaX + deltaY * deltaY);
    }

    private static Circle GetCirclePoints(Scanner scanner) {

        int[] arrCircle = Arrays.stream(scanner.nextLine().split(" "))
                            .mapToInt(Integer::parseInt)
                            .toArray();

        Point centerCoords = new Point();
        centerCoords.x = arrCircle[0];
        centerCoords.y = arrCircle[1];

        Circle currentCircle = new Circle();
        currentCircle.Center = centerCoords;
        currentCircle.radius = arrCircle[2];

        return currentCircle;
    }


    static class Point {
        private int x;
        private int y;

        public int getX() {
            return x;
        }

        public void setX(int x) {
            this.x = x;
        }

        public int getY() {
            return y;
        }

        public void setY(int y) {
            this.y = y;
        }


    }

    static class Circle {
        private Point Center;
        private int radius;

        public Point getCenter() {
            return Center;
        }

        public void setCenter(Point center) {
            Center = center;
        }

        public int getRadius() {
            return radius;
        }

        public void setRadius(int radius) {
            this.radius = radius;
        }


    }
}