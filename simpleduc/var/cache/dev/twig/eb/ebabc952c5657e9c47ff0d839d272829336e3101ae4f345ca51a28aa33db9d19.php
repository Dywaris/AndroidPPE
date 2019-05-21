<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_cfb0c6de20a6c98f077100620dd04cb7354e50e169ae4e9d496222a63fe64c07 extends Twig_Template
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
        $__internal_a4d6f7532dc5c9899193c06e08e7f7d32063a5145defbc7c9ec35211404dee6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4d6f7532dc5c9899193c06e08e7f7d32063a5145defbc7c9ec35211404dee6c->enter($__internal_a4d6f7532dc5c9899193c06e08e7f7d32063a5145defbc7c9ec35211404dee6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_bef294f2eb43ba53992a10c5cd70af4546cd8b94f1e7169533d3f5442dbd2aa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef294f2eb43ba53992a10c5cd70af4546cd8b94f1e7169533d3f5442dbd2aa1->enter($__internal_bef294f2eb43ba53992a10c5cd70af4546cd8b94f1e7169533d3f5442dbd2aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_a4d6f7532dc5c9899193c06e08e7f7d32063a5145defbc7c9ec35211404dee6c->leave($__internal_a4d6f7532dc5c9899193c06e08e7f7d32063a5145defbc7c9ec35211404dee6c_prof);

        
        $__internal_bef294f2eb43ba53992a10c5cd70af4546cd8b94f1e7169533d3f5442dbd2aa1->leave($__internal_bef294f2eb43ba53992a10c5cd70af4546cd8b94f1e7169533d3f5442dbd2aa1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
