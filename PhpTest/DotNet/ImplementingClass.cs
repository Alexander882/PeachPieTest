using System;
using PhpInterfaces;

namespace DotNet
{
    public class ImplementingClass : SomeInterface
    {
        public string GetString()
        {
            return "Some string";
        }
    }
}
