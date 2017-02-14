<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_7974b9a2867a352cbb4aa055eb6b85879cc307d36c9e6191768eb9fc771bc7b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_ef97784a2c8ebaf8a48c895b28ac51e9b666b247fd356f8772836d89c6211d8d = $this->env->getExtension("native_profiler");
        $__internal_ef97784a2c8ebaf8a48c895b28ac51e9b666b247fd356f8772836d89c6211d8d->enter($__internal_ef97784a2c8ebaf8a48c895b28ac51e9b666b247fd356f8772836d89c6211d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef97784a2c8ebaf8a48c895b28ac51e9b666b247fd356f8772836d89c6211d8d->leave($__internal_ef97784a2c8ebaf8a48c895b28ac51e9b666b247fd356f8772836d89c6211d8d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_644dd2f0c6e3542cf222a5b47b6f9bc07eef3b8f8cba5e31a4b443eb28602342 = $this->env->getExtension("native_profiler");
        $__internal_644dd2f0c6e3542cf222a5b47b6f9bc07eef3b8f8cba5e31a4b443eb28602342->enter($__internal_644dd2f0c6e3542cf222a5b47b6f9bc07eef3b8f8cba5e31a4b443eb28602342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_644dd2f0c6e3542cf222a5b47b6f9bc07eef3b8f8cba5e31a4b443eb28602342->leave($__internal_644dd2f0c6e3542cf222a5b47b6f9bc07eef3b8f8cba5e31a4b443eb28602342_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
