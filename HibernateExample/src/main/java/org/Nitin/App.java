package org.Nitin;


import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.Transaction;
import org.hibernate.boot.registry.StandardServiceRegistryBuilder;
import org.hibernate.cfg.Configuration;
import org.hibernate.service.ServiceRegistry;

/**
 * Hello world!
 *
 */
        public class App
        {
            public static void main( String[] args )
            {

                Alien telusko = new Alien();

                Configuration con = new Configuration().configure("hibernate.cfg.xml").addAnnotatedClass(Alien.class);
                ServiceRegistry reg = new StandardServiceRegistryBuilder().applySettings(con.getProperties()).build();
                SessionFactory sf = con.buildSessionFactory(reg);
                Session session = sf.openSession();

                Transaction tx = session.beginTransaction();

                telusko = (Alien)session.get(Alien.class,101);

                System.out.println(telusko);

            }
        }


