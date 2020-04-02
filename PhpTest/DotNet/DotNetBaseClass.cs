using System;
using System.Collections.Generic;
using System.Text;

namespace DotNet
{
    public class DotNetBaseClass
    {
        private readonly string _text;

        public DotNetBaseClass(int val, string text)
        {
            _text = text;
        }

        public string GetString()
        {
            return _text;
        }
    }
}
