import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.util.Calendar;
import java.util.Scanner;
import java.time.*;


public class Ejecutable {

	public static void main(String[] args) throws SQLException, ClassNotFoundException {
		reservas r1 = new reservas("Remedios","remedios1812@gmail.com","4716475231","8", "2022-13-06");
		BaseDeDatos bd=new BaseDeDatos();
		bd.agregarReservaALaTabla(r1.getNombre(), r1.getEmail(), r1.getTelefono(), r1.getCantidad(), r1.getFecha());
		//bd.updateReservaPorID(4, r1.getNombre(), r1.getEmail(), r1.getTelefono(), r1.getCantidad(), r1.getFecha());
	}
}
