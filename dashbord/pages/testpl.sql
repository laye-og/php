 SET SERVEROUTPUT ON 
 Declare
 Type Type_Tab_Number is table of number index by binary_integer ;
 T1 Type_Tab_Number ; i number ;
 BEGIN
 i:=1;
 Loop
	 T1(i):=i; i:=i+1;
	 exit when i>10;
	 end Loop;
	 dbms_output.put_line('Premier élément :'||T1(T1.FIRST));
	 dbms_output.put_line('Dernier  élément :'||T1(T1.LAST));
	 dbms_output.put_line('Nombre d élément de T1 avant suppression  :'||T1(T1.COUNT));

	 end;
	 /