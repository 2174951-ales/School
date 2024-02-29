class Student
{
    public required string Name { get; set; }
    public int Age { get; set; }
}

class DictionaryClass { 
static public void Main()
{
        Dictionary<int, Student> studenten = new Dictionary<int, Student>();

        studenten.Add(891, new Student { Name = "ales", Age = 17 });
        studenten.Add(892, new Student { Name = "lebron", Age = 27 });
        studenten.Add(893, new Student { Name = "jon", Age = 37 });
        studenten.Add(894, new Student { Name = "adin", Age = 27 });
        studenten.Add(895, new Student { Name = "duke", Age = 17 });
        studenten.Add(896, new Student { Name = "jenn", Age = 16 });
        studenten.Add(897, new Student { Name = "jay", Age = 15 });
        studenten.Add(898, new Student { Name = "henk", Age = 16 });
        studenten.Add(899, new Student { Name = "kyle", Age = 18 });
        studenten.Add(900, new Student { Name = "kai", Age = 19 });

        if (studenten.ContainsKey(891))
            Console.WriteLine($"Key: 891 naam: {studenten[891].Name}, leeftijd: {studenten[891].Age}");

        else
            Console.WriteLine("Key bestaat niet");

        if (studenten.ContainsKey(901))
            Console.WriteLine($"Key: 901 naam: {studenten[901].Name}, leeftijd: {studenten[901].Age}");

        else
            Console.WriteLine("Key bestaat niet");


        foreach (var studentNummer in studenten.Keys)
        {
            Console.WriteLine(studentNummer);
        }

        foreach (var student in studenten.Values)
        {
            Console.WriteLine(student.Name);
        }

        SortedDictionary<int, Student> gesorteerdeStudenten = new SortedDictionary<int, Student>(studenten);

        foreach (var student in gesorteerdeStudenten)
        {
            Console.WriteLine($"Studentnummer: {student.Key}, Naam: {student.Value.Name}");
        }

        List<Student> studentenOpLeeftijd = new List<Student>(studenten.Values);
        studentenOpLeeftijd.Sort((s1, s2) => s1.Age.CompareTo(s2.Age));
        
        Console.WriteLine($"Oudste student: Naam: {studentenOpLeeftijd[9].Name}, Leeftijd: {studentenOpLeeftijd[9].Age}");

        foreach (var student in studentenOpLeeftijd)
        {
            Console.WriteLine($"Naam: {student.Name}, Leeftijd: {student.Age}");
        }
        





    }

}
