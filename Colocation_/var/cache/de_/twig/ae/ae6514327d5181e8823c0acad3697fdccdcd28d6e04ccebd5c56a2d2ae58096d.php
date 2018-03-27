<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_f9d9d1128ccdb34ea99a6ff7958c4fb5851609812af7c938a9aca980d83f154b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74919eda1c8f468ec11dda3b8ce318d7697a53504639a196cf945f83d934eb6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74919eda1c8f468ec11dda3b8ce318d7697a53504639a196cf945f83d934eb6f->enter($__internal_74919eda1c8f468ec11dda3b8ce318d7697a53504639a196cf945f83d934eb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_e235b1bffa3e80db4a7d29191c4e3620d44308a5170b4f961deec9f4bc7761d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e235b1bffa3e80db4a7d29191c4e3620d44308a5170b4f961deec9f4bc7761d6->enter($__internal_e235b1bffa3e80db4a7d29191c4e3620d44308a5170b4f961deec9f4bc7761d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_74919eda1c8f468ec11dda3b8ce318d7697a53504639a196cf945f83d934eb6f->leave($__internal_74919eda1c8f468ec11dda3b8ce318d7697a53504639a196cf945f83d934eb6f_prof);

        
        $__internal_e235b1bffa3e80db4a7d29191c4e3620d44308a5170b4f961deec9f4bc7761d6->leave($__internal_e235b1bffa3e80db4a7d29191c4e3620d44308a5170b4f961deec9f4bc7761d6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
