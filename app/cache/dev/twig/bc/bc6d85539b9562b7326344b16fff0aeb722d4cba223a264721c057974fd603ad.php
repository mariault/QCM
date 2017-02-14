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
        $__internal_d41b66c8cf824096e89ee16ba92b99211acdc30c8353de3298e8d5b2b0ffe0f6 = $this->env->getExtension("native_profiler");
        $__internal_d41b66c8cf824096e89ee16ba92b99211acdc30c8353de3298e8d5b2b0ffe0f6->enter($__internal_d41b66c8cf824096e89ee16ba92b99211acdc30c8353de3298e8d5b2b0ffe0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d41b66c8cf824096e89ee16ba92b99211acdc30c8353de3298e8d5b2b0ffe0f6->leave($__internal_d41b66c8cf824096e89ee16ba92b99211acdc30c8353de3298e8d5b2b0ffe0f6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_23beaabfc44340e32f2caf91addbf18b3030b2d63bcc9cf7f1f47205f7c4d18d = $this->env->getExtension("native_profiler");
        $__internal_23beaabfc44340e32f2caf91addbf18b3030b2d63bcc9cf7f1f47205f7c4d18d->enter($__internal_23beaabfc44340e32f2caf91addbf18b3030b2d63bcc9cf7f1f47205f7c4d18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_23beaabfc44340e32f2caf91addbf18b3030b2d63bcc9cf7f1f47205f7c4d18d->leave($__internal_23beaabfc44340e32f2caf91addbf18b3030b2d63bcc9cf7f1f47205f7c4d18d_prof);

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
