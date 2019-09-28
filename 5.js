function char_count(Kata, Huruf) 
{
 var countChar = 0;
 for (var posisi = 0; posisi < Kata.length; posisi++) 
 {
    if (Kata.charAt(posisi) == Huruf) 
      {
      countChar += 1;
      }
  }
  return countChar;
}
