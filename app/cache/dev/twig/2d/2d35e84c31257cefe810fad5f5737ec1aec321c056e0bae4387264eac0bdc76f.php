<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_f44cd3106683043b9c8b5b8d5a8e21510136220667b5a7e926ec4b069ad7e4c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a78052d18966703a435b53628f37f0c0ef8ec6e88e61a4e5974de8946163eb6 = $this->env->getExtension("native_profiler");
        $__internal_7a78052d18966703a435b53628f37f0c0ef8ec6e88e61a4e5974de8946163eb6->enter($__internal_7a78052d18966703a435b53628f37f0c0ef8ec6e88e61a4e5974de8946163eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a78052d18966703a435b53628f37f0c0ef8ec6e88e61a4e5974de8946163eb6->leave($__internal_7a78052d18966703a435b53628f37f0c0ef8ec6e88e61a4e5974de8946163eb6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d8510666bf624672d797942adabbf8aa849e8b9c887faa18d5a83cadf0a65bc = $this->env->getExtension("native_profiler");
        $__internal_8d8510666bf624672d797942adabbf8aa849e8b9c887faa18d5a83cadf0a65bc->enter($__internal_8d8510666bf624672d797942adabbf8aa849e8b9c887faa18d5a83cadf0a65bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_8d8510666bf624672d797942adabbf8aa849e8b9c887faa18d5a83cadf0a65bc->leave($__internal_8d8510666bf624672d797942adabbf8aa849e8b9c887faa18d5a83cadf0a65bc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "@FOSUser/Profile/show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
