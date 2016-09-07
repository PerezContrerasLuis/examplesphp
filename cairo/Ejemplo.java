import javax.swing.JOptionPane;
public class Ejemplo{

	 public static void main(String[] args){
      
       String nombre = JOptionPane.showInputDialog("cual es tu nombre?");
      JOptionPane.showMessageDialog(null, "hola "+nombre);
	 }
}