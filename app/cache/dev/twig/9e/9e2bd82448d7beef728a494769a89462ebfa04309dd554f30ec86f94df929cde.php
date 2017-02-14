<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_3f2d75fb1f30114936c3c05baf94f86120af119af43d7013cbd2c1eb48a5c5fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41abaf30ec3672cef68398a85f9b576997328eece0ec1bfe77084b6a462c263d = $this->env->getExtension("native_profiler");
        $__internal_41abaf30ec3672cef68398a85f9b576997328eece0ec1bfe77084b6a462c263d->enter($__internal_41abaf30ec3672cef68398a85f9b576997328eece0ec1bfe77084b6a462c263d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_41abaf30ec3672cef68398a85f9b576997328eece0ec1bfe77084b6a462c263d->leave($__internal_41abaf30ec3672cef68398a85f9b576997328eece0ec1bfe77084b6a462c263d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b97236b3b23a236847027f4dc63c19ca7bbaffb68332cef27846ec459bb608be = $this->env->getExtension("native_profiler");
        $__internal_b97236b3b23a236847027f4dc63c19ca7bbaffb68332cef27846ec459bb608be->enter($__internal_b97236b3b23a236847027f4dc63c19ca7bbaffb68332cef27846ec459bb608be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_b97236b3b23a236847027f4dc63c19ca7bbaffb68332cef27846ec459bb608be->leave($__internal_b97236b3b23a236847027f4dc63c19ca7bbaffb68332cef27846ec459bb608be_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7e422495d7d46ceb6e9b3217aa5cbf533ebb5af57d6cd89110ce4039545ed735 = $this->env->getExtension("native_profiler");
        $__internal_7e422495d7d46ceb6e9b3217aa5cbf533ebb5af57d6cd89110ce4039545ed735->enter($__internal_7e422495d7d46ceb6e9b3217aa5cbf533ebb5af57d6cd89110ce4039545ed735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7e422495d7d46ceb6e9b3217aa5cbf533ebb5af57d6cd89110ce4039545ed735->leave($__internal_7e422495d7d46ceb6e9b3217aa5cbf533ebb5af57d6cd89110ce4039545ed735_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4f85e862d140887703cea64a6db234535a50a11cf37dc849862e38cccd556ea7 = $this->env->getExtension("native_profiler");
        $__internal_4f85e862d140887703cea64a6db234535a50a11cf37dc849862e38cccd556ea7->enter($__internal_4f85e862d140887703cea64a6db234535a50a11cf37dc849862e38cccd556ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4f85e862d140887703cea64a6db234535a50a11cf37dc849862e38cccd556ea7->leave($__internal_4f85e862d140887703cea64a6db234535a50a11cf37dc849862e38cccd556ea7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {%- autoescape false -%}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {%- endautoescape -%}*/
/* {% endblock %}*/
/* */
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
