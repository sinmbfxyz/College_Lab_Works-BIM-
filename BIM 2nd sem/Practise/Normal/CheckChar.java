import java.util.*;

public class CheckChar{
    public static void main(String[]args){
        Scanner sc=new Scanner(System.in);
        System.out.println("Enter a character: ");
        char ch=sc.next().charAt(0);
        if(ch>='A' && ch<='Z' || ch>='a' && ch<='z'){
            System.out.println("Alphabet");
        }
        else if(ch>='0' && ch<='9'){
            System.out.println("Number");
        }
        else{
            System.out.println("Special Character");
        }

    }
}