<?php

/* SdzBlogBundle:Default:index.html.twig */
class __TwigTemplate_d593af19360cf47aedc9c1e60208efef extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
  <body>
Hello ";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
