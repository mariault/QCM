<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_96c3eed2190aa48640221abb71793be6c6d6ae7ad083dc80261595313b0b5645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_0072fceb072e27c2328c059e257b8c95cd4025e16321d795bfa9a682d33d658d = $this->env->getExtension("native_profiler");
        $__internal_0072fceb072e27c2328c059e257b8c95cd4025e16321d795bfa9a682d33d658d->enter($__internal_0072fceb072e27c2328c059e257b8c95cd4025e16321d795bfa9a682d33d658d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0072fceb072e27c2328c059e257b8c95cd4025e16321d795bfa9a682d33d658d->leave($__internal_0072fceb072e27c2328c059e257b8c95cd4025e16321d795bfa9a682d33d658d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_74e97c6caece6bb45ec1b5d879545f6002c8963bdf385ce8496f093ecbb9b921 = $this->env->getExtension("native_profiler");
        $__internal_74e97c6caece6bb45ec1b5d879545f6002c8963bdf385ce8496f093ecbb9b921->enter($__internal_74e97c6caece6bb45ec1b5d879545f6002c8963bdf385ce8496f093ecbb9b921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_74e97c6caece6bb45ec1b5d879545f6002c8963bdf385ce8496f093ecbb9b921->leave($__internal_74e97c6caece6bb45ec1b5d879545f6002c8963bdf385ce8496f093ecbb9b921_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}*/
/* </p>*/
/* {% endblock %}*/
/* */
