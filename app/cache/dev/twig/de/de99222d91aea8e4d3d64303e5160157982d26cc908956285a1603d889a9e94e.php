<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_208f372052a5c63ba36c24ab530ee590005d3cbbff7701cf7d4cc1b782dda165 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_4be5f724f21148bcd860eb95ff6edd230e681dfc841fa073ab9c89deb60d4776 = $this->env->getExtension("native_profiler");
        $__internal_4be5f724f21148bcd860eb95ff6edd230e681dfc841fa073ab9c89deb60d4776->enter($__internal_4be5f724f21148bcd860eb95ff6edd230e681dfc841fa073ab9c89deb60d4776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4be5f724f21148bcd860eb95ff6edd230e681dfc841fa073ab9c89deb60d4776->leave($__internal_4be5f724f21148bcd860eb95ff6edd230e681dfc841fa073ab9c89deb60d4776_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a15e7c3a0ef801e8744e2a50651d696cfd8e9c6bac9d18afc2abef0484f43ba = $this->env->getExtension("native_profiler");
        $__internal_5a15e7c3a0ef801e8744e2a50651d696cfd8e9c6bac9d18afc2abef0484f43ba->enter($__internal_5a15e7c3a0ef801e8744e2a50651d696cfd8e9c6bac9d18afc2abef0484f43ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_5a15e7c3a0ef801e8744e2a50651d696cfd8e9c6bac9d18afc2abef0484f43ba->leave($__internal_5a15e7c3a0ef801e8744e2a50651d696cfd8e9c6bac9d18afc2abef0484f43ba_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
/*     {{ include('@FOSUser/Security/login_content.html.twig') }}*/
/* {% endblock fos_user_content %}*/
/* */
