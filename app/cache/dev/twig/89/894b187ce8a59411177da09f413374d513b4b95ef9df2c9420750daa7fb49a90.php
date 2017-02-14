<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_1fa91b2c2c2cbbf5307b8c3c68daf1f9b1dee147fbe6676e515e5abe17954a4e extends Twig_Template
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
        $__internal_ce1ea5eb135d8eedb3629a5b9434f0aa55100b0cb418f984aa5f136f3b65ea56 = $this->env->getExtension("native_profiler");
        $__internal_ce1ea5eb135d8eedb3629a5b9434f0aa55100b0cb418f984aa5f136f3b65ea56->enter($__internal_ce1ea5eb135d8eedb3629a5b9434f0aa55100b0cb418f984aa5f136f3b65ea56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ce1ea5eb135d8eedb3629a5b9434f0aa55100b0cb418f984aa5f136f3b65ea56->leave($__internal_ce1ea5eb135d8eedb3629a5b9434f0aa55100b0cb418f984aa5f136f3b65ea56_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bbb442689c5e0c07bda42f357c6cc708064aeb4468cf2e8724a0ab9b02a07c3b = $this->env->getExtension("native_profiler");
        $__internal_bbb442689c5e0c07bda42f357c6cc708064aeb4468cf2e8724a0ab9b02a07c3b->enter($__internal_bbb442689c5e0c07bda42f357c6cc708064aeb4468cf2e8724a0ab9b02a07c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_bbb442689c5e0c07bda42f357c6cc708064aeb4468cf2e8724a0ab9b02a07c3b->leave($__internal_bbb442689c5e0c07bda42f357c6cc708064aeb4468cf2e8724a0ab9b02a07c3b_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_495ee99d2f7cbd2785fd63009a4ca8c578e49e0467e9d52c83e0090b038fa1fa = $this->env->getExtension("native_profiler");
        $__internal_495ee99d2f7cbd2785fd63009a4ca8c578e49e0467e9d52c83e0090b038fa1fa->enter($__internal_495ee99d2f7cbd2785fd63009a4ca8c578e49e0467e9d52c83e0090b038fa1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_495ee99d2f7cbd2785fd63009a4ca8c578e49e0467e9d52c83e0090b038fa1fa->leave($__internal_495ee99d2f7cbd2785fd63009a4ca8c578e49e0467e9d52c83e0090b038fa1fa_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_930c8c2a2a3059e96639593cd5712279a9ff34c653f6fe02faa5121fb7e957c9 = $this->env->getExtension("native_profiler");
        $__internal_930c8c2a2a3059e96639593cd5712279a9ff34c653f6fe02faa5121fb7e957c9->enter($__internal_930c8c2a2a3059e96639593cd5712279a9ff34c653f6fe02faa5121fb7e957c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_930c8c2a2a3059e96639593cd5712279a9ff34c653f6fe02faa5121fb7e957c9->leave($__internal_930c8c2a2a3059e96639593cd5712279a9ff34c653f6fe02faa5121fb7e957c9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
