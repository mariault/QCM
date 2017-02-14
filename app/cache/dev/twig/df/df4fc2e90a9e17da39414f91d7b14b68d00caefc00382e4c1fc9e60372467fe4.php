<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_09589ad516c8fc367f163db806cc1cc1e74e9ad1ae35a2e552881a1f1230dd3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_bc119d587ea51e606028a42d1a29c6f9817776811e48e443106ec5772f975e88 = $this->env->getExtension("native_profiler");
        $__internal_bc119d587ea51e606028a42d1a29c6f9817776811e48e443106ec5772f975e88->enter($__internal_bc119d587ea51e606028a42d1a29c6f9817776811e48e443106ec5772f975e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc119d587ea51e606028a42d1a29c6f9817776811e48e443106ec5772f975e88->leave($__internal_bc119d587ea51e606028a42d1a29c6f9817776811e48e443106ec5772f975e88_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d6954f06781e617797decd62b6f536ddc21507313deb9f31f02c9de53a232ea3 = $this->env->getExtension("native_profiler");
        $__internal_d6954f06781e617797decd62b6f536ddc21507313deb9f31f02c9de53a232ea3->enter($__internal_d6954f06781e617797decd62b6f536ddc21507313deb9f31f02c9de53a232ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d6954f06781e617797decd62b6f536ddc21507313deb9f31f02c9de53a232ea3->leave($__internal_d6954f06781e617797decd62b6f536ddc21507313deb9f31f02c9de53a232ea3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
